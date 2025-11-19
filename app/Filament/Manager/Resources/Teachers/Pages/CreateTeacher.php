<?php

namespace App\Filament\Manager\Resources\Teachers\Pages;

use App\Filament\Manager\Resources\Teachers\TeacherResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeacher extends CreateRecord
{
    protected static string $resource = TeacherResource::class;
}
