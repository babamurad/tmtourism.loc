<?php

namespace App\Filament\Resources\Tours\Pages;

use App\Filament\Resources\Tours\TourResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;
use Illuminate\Support\Facades\Log;

class EditTour extends EditRecord
{
    protected static string $resource = TourResource::class;

    protected function afterSave(): void
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
        Log::info('Uploaded attachments:', ['attachments' => $uploadedAttachments]);
        foreach ($uploadedAttachments as $index => $attachmentPath) {
            Log::info('Attachment path:', ['path' => $attachmentPath]);
            // Проверяем, является ли это новым временным файлом
            if (str_starts_with($attachmentPath, 'livewire-tmp/')) {
                // Перемещаем временный файл в постоянное место
                $newPath = Storage::disk('public_uploads')->putFile('tours', $attachmentPath);
                $fileName = basename($newPath);
                $mimeType = Storage::disk('public_uploads')->mimeType($newPath);

                // Создаем новую запись Media
                Media::create([
                    'model_type' => \App\Models\Tour::class,
                    'model_id' => $tour->id,
                    'file_path' => $newPath,
                    'file_name' => $fileName,
                    'mime_type' => $mimeType,
                    'order_column' => $index + 1,
                ]);
                $retainedMediaPaths[] = $newPath;
            } else {
                // Это существующий путь к файлу (например, 'tours/filename.jpg')
                // Находим соответствующую запись Media и обновляем ее порядок
                $mediaItem = $existingMedia->first(function ($media) use ($attachmentPath) {
                    Log::info('Existing media file_path:', ['file_path' => $media->file_path]);
                    return basename($media->file_path) === basename($attachmentPath);
                });

                if ($mediaItem) {
                    $mediaItem->update(['order_column' => $index + 1]);
                    $retainedMediaPaths[] = 'tours/' . basename($mediaItem->file_path); // Добавляем в сохраненные пути
                } else {
                    Log::warning('Media item not found for attachment path:', ['attachmentPath' => $attachmentPath]);
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

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
