<?php

namespace App\Filament\Resources\TourGroups;

use App\Filament\Resources\TourGroups\Pages\CreateTourGroup;
use App\Filament\Resources\TourGroups\Pages\EditTourGroup;
use App\Filament\Resources\TourGroups\Pages\ListTourGroups;
use App\Filament\Resources\TourGroups\Pages\ViewTourGroup;
use App\Filament\Resources\TourGroups\Schemas\TourGroupForm;
use App\Filament\Resources\TourGroups\Schemas\TourGroupInfolist;
use App\Filament\Resources\TourGroups\Tables\TourGroupsTable;
use App\Models\TourGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TourGroupResource extends Resource
{
    protected static ?string $model = TourGroup::class;

    protected static string|null|\UnitEnum $navigationGroup = 'Туры и услуги';
    protected static string|null|BackedEnum $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel  = 'Группы туров';

    protected static ?string $recordTitleAttribute = 'starts_at';

    public static function form(Schema $schema): Schema
    {
        return TourGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TourGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TourGroupsTable::configure($table);
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
            'index' => ListTourGroups::route('/'),
            'create' => CreateTourGroup::route('/create'),
            'view' => ViewTourGroup::route('/{record}'),
            'edit' => EditTourGroup::route('/{record}/edit'),
        ];
    }
}
