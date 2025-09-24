<?php

namespace App\Filament\Resources\CarouselSlides\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class CarouselSlidesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Изображение')->square()->size(64),
                TextColumn::make('title')->label('Заголовок')->searchable()->sortable(),
                TextColumn::make('sort_order')->label('Порядок')->sortable(),
                IconColumn::make('is_active')->boolean()->label('Активен'),
                TextColumn::make('updated_at')->dateTime('d.m.Y H:i')->label('Обновлено')->sortable(),
            ])
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
