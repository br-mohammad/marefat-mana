<?php

namespace App\Filament\Teacher\Resources\ClassStudents;

use App\Filament\Teacher\Resources\ClassStudents\Pages\ManageClassStudents;
use App\Models\ClassStudent;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClassStudentResource extends Resource
{
    protected static ?string $model = ClassStudent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_id')
                    ->required()
                    ->numeric(),
                TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                TextInput::make('midterm_exam_score')
                    ->numeric(),
                TextInput::make('final_exam_score')
                    ->numeric(),
                TextInput::make('class_score')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('class_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('student_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('midterm_exam_score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('final_exam_score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('class_score')
                    ->numeric()
                    ->sortable(),
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
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageClassStudents::route('/'),
        ];
    }
}
