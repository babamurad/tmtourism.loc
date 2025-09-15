<?php

namespace App\Filament\Resources\TourGroups\Pages;

use App\Filament\Resources\TourGroups\TourGroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTourGroup extends CreateRecord
{
    protected static string $resource = TourGroupResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
