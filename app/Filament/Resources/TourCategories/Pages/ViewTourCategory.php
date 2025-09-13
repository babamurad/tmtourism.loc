<?php

namespace App\Filament\Resources\TourCategories\Pages;

use App\Filament\Resources\TourCategories\TourCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTourCategory extends ViewRecord
{
    protected static string $resource = TourCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
