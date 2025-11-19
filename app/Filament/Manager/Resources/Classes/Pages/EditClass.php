<?php

namespace App\Filament\Manager\Resources\Classes\Pages;

use App\Filament\Manager\Resources\Classes\ClassResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClass extends EditRecord
{
    protected static string $resource = ClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
