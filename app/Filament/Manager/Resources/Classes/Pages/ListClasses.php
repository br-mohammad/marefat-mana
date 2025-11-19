<?php

namespace App\Filament\Manager\Resources\Classes\Pages;

use App\Filament\Manager\Resources\Classes\ClassResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClasses extends ListRecords
{
    protected static string $resource = ClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
