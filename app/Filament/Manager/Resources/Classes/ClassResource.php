<?php

namespace App\Filament\Manager\Resources\Classes;

use App\Filament\Manager\Resources\Classes\Pages\CreateClass;
use App\Filament\Manager\Resources\Classes\Pages\EditClass;
use App\Filament\Manager\Resources\Classes\Pages\ListClasses;
use App\Filament\Manager\Resources\Classes\Schemas\ClassForm;
use App\Filament\Manager\Resources\Classes\Tables\ClassesTable;
use App\Models\Class;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassResource extends Resource
{
    /*protected static ?string $model = Class::class;*/
    protected static ?string $model = \App\Models\ClassModel::class;


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'php artisan make:filament-resource ClassModel --panel=manager --generate';

    public static function form(Schema $schema): Schema
    {
        return ClassForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClasses::route('/'),
            'create' => CreateClass::route('/create'),
            'edit' => EditClass::route('/{record}/edit'),
        ];
    }
}
