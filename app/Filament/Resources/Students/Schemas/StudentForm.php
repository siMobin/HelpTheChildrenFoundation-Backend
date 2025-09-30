<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sponsor_no'),
               
                TextInput::make('student_id')
                    ->required(),
                TextInput::make('dropped_out'),
                TextInput::make('name'),
                TextInput::make('gender'),
                TextInput::make('class'),
                TextInput::make('roll')
                    ->numeric(),
                TextInput::make('weight'),
                TextInput::make('height'),
                TextInput::make('age')
                    ->numeric(),
                TextInput::make('father_name'),
                TextInput::make('mother_name'),
                TextInput::make('father_occupation'),
                TextInput::make('mother_occupation'),
                TextInput::make('family_members')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('mobile_number'),
                TextInput::make('other_guardian'),
                Textarea::make('permanent_address')
                    ->columnSpanFull(),
                Textarea::make('present_address')
                    ->columnSpanFull(),
                FileUpload::make('photo_path')
                ->disk('public')
                ->directory('students')
                ->visibility('public')
,
            ]);
    }
}
