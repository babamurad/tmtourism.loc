<?php

namespace App\Filament\Resources\TourGroups\Pages;

use App\Filament\Resources\TourGroups\TourGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTourGroup extends EditRecord
{
    protected static string $resource = TourGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
