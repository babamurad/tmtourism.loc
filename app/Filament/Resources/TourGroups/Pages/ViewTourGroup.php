<?php

namespace App\Filament\Resources\TourGroups\Pages;

use App\Filament\Resources\TourGroups\TourGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTourGroup extends ViewRecord
{
    protected static string $resource = TourGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
