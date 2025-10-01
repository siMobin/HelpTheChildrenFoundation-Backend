<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sponsor_no'),
                TextInput::make('student_id'),
                // ->required(),
                TextInput::make('dropped_out'),
                TextInput::make('name')
                    ->required(),
                Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required(),
                TextInput::make('class'),
                TextInput::make('roll')
                    ->numeric(),
                TextInput::make('weight'),
                TextInput::make('height'),
                DatePicker::make('birth_date')
                    ->required(),
                TextInput::make('father_name')
                    ->required(),
                TextInput::make('father_occupation'),
                TextInput::make('mother_name')
                    ->required(),
                TextInput::make('mother_occupation'),
                TextInput::make('family_members')
                    ->required()
                    ->numeric()
                    ->default(0),
                Repeater::make('phoneNumbers')
                    ->relationship()
                    ->schema([
                        TextInput::make('phone_number')
                            ->label('Phone Number')
                            ->tel()
                            ->columns(1)
                            ->required(),
                    ])
                    ->defaultItems(1)
                    ->addActionLabel('Add another phone number')
                // ->columnSpanFull()
                ,
                TextInput::make('other_guardian'),
                Textarea::make('present_address')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('permanent_address')
                    ->columnSpanFull(),
                FileUpload::make('photo_path')
                    ->disk('public')
                    ->directory('students')
                    ->visibility('public'),
            ]);
    }
}
