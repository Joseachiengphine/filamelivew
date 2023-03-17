<?php

namespace App\Filament\Resources\StudentsResource\Pages;

use App\Filament\Resources\StudentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudents extends EditRecord
{
    protected static string $resource = StudentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
