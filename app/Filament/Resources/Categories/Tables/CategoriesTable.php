<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
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
                IconColumn::make('is_published')->sortable()
                    ->boolean()
                    ->toggleable(),
//                    ->icon(fn (string $state): Heroicon => match ($state) {
//                        '0' => Heroicon::OutlinedXCircle,
//                        '1' => Heroicon::OutlinedCheckCircle,
//                    })
//                    ->color(fn (string $state): string => match ($state) {
//                        '0' => 'warning',
//                        '1' => 'success',
//                    }),
                    ])->defaultSort('id', 'desc')->searchPlaceholder('Search by title')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
