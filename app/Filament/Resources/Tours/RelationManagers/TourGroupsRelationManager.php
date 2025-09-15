<?php

namespace App\Filament\Resources\Tours\RelationManagers;

use Filament\Forms\Components\{DateTimePicker, Select, TextInput};
use Filament\Schemas\Schema;
use Filament\Tables\Columns\{BadgeColumn, TextColumn};
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class TourGroupsRelationManager extends RelationManager
{
    protected static string $relationship = 'tourGroups';
    protected static ?string $title = 'Группы заездов';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                DateTimePicker::make('starts_at')
                    ->required(),

                TextInput::make('max_people')
                    ->numeric()
                    ->required(),

                TextInput::make('price_cents')
                    ->numeric()
                    ->required()
                    ->label('Цена, тыйны'),

                Select::make('status')
                    ->options([
                        'draft'     => 'Черновик',
                        'open'      => 'Открыт',
                        'closed'    => 'Закрыт',
                        'cancelled' => 'Отменён',
                    ])
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('starts_at')
                    ->label('Дата начала')
                    ->date('d.m.Y')
                    ->sortable(),

                TextColumn::make('price_cents')
                    ->money('tmt', true)
                    ->label('Цена группы'),

                TextColumn::make('max_people')
                    ->label('Мест'),

                TextColumn::make('current_people')
                    ->label('Занято'),

                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'draft',
                        'success' => 'open',
                        'danger'  => 'closed',
                        'gray'    => 'cancelled',
                    ]),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
