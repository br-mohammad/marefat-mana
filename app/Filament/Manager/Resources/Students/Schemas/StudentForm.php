<?php

namespace App\Filament\Manager\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('نام')
                    ->required(),
                TextInput::make('last_name')
                    ->label('نام خانوادگی')
                    ->required(),
                TextInput::make('mobile')
                    ->label('شماره موبایل')
                    ->required(),
                TextInput::make('email')
                    ->label('ایمیل')
                    ->required(),
                TextInput::make('password')
                    ->label('رمز عبور')
                    ->password()
                    ->required(),
            ]);
    }
}
