<?php

namespace App\Filament\Manager\Resources\Levels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LevelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('requirement_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
