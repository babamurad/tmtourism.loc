<?php

namespace App\Filament\Resources\CarouselSlides;

use App\Filament\Resources\CarouselSlides\Pages\CreateCarouselSlide;
use App\Filament\Resources\CarouselSlides\Pages\EditCarouselSlide;
use App\Filament\Resources\CarouselSlides\Pages\ListCarouselSlides;
use App\Filament\Resources\CarouselSlides\Schemas\CarouselSlideForm;
use App\Filament\Resources\CarouselSlides\Tables\CarouselSlidesTable;
use App\Models\CarouselSlide;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CarouselSlideResource extends Resource
{
    protected static ?string $model = CarouselSlide::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    protected static string|null|\UnitEnum $navigationGroup = 'Контент и маркетинг';
    protected static ?string $navigationLabel = 'Карусель';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return CarouselSlideForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarouselSlidesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCarouselSlides::route('/'),
            'create' => CreateCarouselSlide::route('/create'),
            'edit' => EditCarouselSlide::route('/{record}/edit'),
        ];
    }
}
