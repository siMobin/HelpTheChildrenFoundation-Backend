<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sponsor_no')
                    ->copyable()
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('photo_path')
                    ->disk('public')
                    ->searchable(),
                TextColumn::make('student_id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('dropped_out')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('gender')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('class')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('roll')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('weight')
                    ->searchable(),
                TextColumn::make('height')
                    ->searchable(),
                TextColumn::make('birth_date')
                    // ->numeric()
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $date = \Carbon\Carbon::parse($state);
                        return $date->format('m/d/Y') . ' (' . $date->age . ' Years)';
                    }),
                TextColumn::make('father_name')
                    ->searchable(),
                TextColumn::make('father_occupation')
                    ->searchable(),
                TextColumn::make('mother_name')
                    ->searchable(),
                TextColumn::make('mother_occupation')
                    ->searchable(),
                TextColumn::make('family_members')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('phoneNumbers.phone_number')
                    ->label('Phone Numbers')
                    ->listWithLineBreaks()
                    ->limitList(2)
                    ->expandableLimitedList()
                    ->searchable()
                    ->copyable(),
                TextColumn::make('other_guardian')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
