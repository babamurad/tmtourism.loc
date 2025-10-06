<?php

namespace App\Filament\Resources\Tours\Pages;

use App\Filament\Resources\Tours\TourResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateTour extends CreateRecord
{
    protected static string $resource = TourResource::class;

    protected function afterCreate(): void
    {
        $this->syncMedia($this->record);
    }

    private function syncMedia(\App\Models\Tour $tour): void
    {
        $uploadedAttachments = $this->data['attachments'] ?? [];
        Log::info('Uploaded attachments:', ['attachments' => $uploadedAttachments]);

        // Получаем существующие медиафайлы для тура
        $existingMedia = $tour->media;

        // Пути существующих медиафайлов, которые все еще находятся в форме
        $retainedMediaPaths = [];

        // Итерируем по загруженным вложениям для обработки новых и идентификации сохраненных
        foreach ($uploadedAttachments as $index => $attachmentPath) {
            // Проверяем, является ли это новым временным файлом
            if (str_starts_with($attachmentPath, 'livewire-tmp/')) {
                // Перемещаем временный файл в постоянное место
                $newPath = Storage::disk('public_uploads')->putFile('tours', $attachmentPath);
                $fileName = basename($newPath);
                $mimeType = Storage::disk('public_uploads')->mimeType($newPath);

                // Создаем новую запись Media
                try {
                    $media = new Media([
                        'file_path' => basename($newPath),
                        'file_name' => $fileName,
                        'mime_type' => $mimeType,
                        'order_column' => $index + 1,
                    ]);
                    $tour->media()->save($media);
                    $retainedMediaPaths[] = $newPath;
                } catch (\Exception $e) {
                    Log::error('Error creating media:', ['error' => $e->getMessage()]);
                }
            } else {
                // Это существующий путь к файлу (например, 'tours/filename.jpg')
                // Находим соответствующую запись Media и обновляем ее порядок
                $mediaItem = $existingMedia->first(function ($media) use ($attachmentPath) {
                    return $media->file_path === $attachmentPath;
                });

                if ($mediaItem) {
                    $mediaItem->update(['order_column' => $index + 1]);
                    $retainedMediaPaths[] = $attachmentPath; // Добавляем в сохраненные пути
                }
            }
        }

        // Удаляем медиафайлы, которые больше не находятся в форме
        foreach ($existingMedia as $mediaItem) {
            if (!in_array($mediaItem->file_path, $retainedMediaPaths)) {
                // Удаляем из хранилища
                Storage::disk('public_uploads')->delete($mediaItem->file_path);
                // Удаляем из базы данных
                $mediaItem->delete();
            }
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
