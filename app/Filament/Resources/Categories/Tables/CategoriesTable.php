<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->toggleable(),
                ImageColumn::make('image')
                ->defaultImageUrl(url('images/placeholder.jpg'))
                    ->toggleable(),
                TextColumn::make('title')->sortable()->searchable()
                    ->toggleable(),
                TextColumn::make('slug')
                    ->toggleable(),

                    ])->defaultSort('id', 'desc')->searchPlaceholder('Search by title')->toolbarActions([
                DeleteBulkAction::make(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make() ->successNotificationTitle('Category deleted')
            ]);
    }
}
