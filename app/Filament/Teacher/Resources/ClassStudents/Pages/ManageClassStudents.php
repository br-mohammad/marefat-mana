<?php

namespace App\Filament\Teacher\Resources\ClassStudents\Pages;

use App\Filament\Teacher\Resources\ClassStudents\ClassStudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageClassStudents extends ManageRecords
{
    protected static string $resource = ClassStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
