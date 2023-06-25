<?php

namespace App\Filament\Resources\LeavetypeResource\Pages;

use App\Filament\Resources\LeavetypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeavetype extends EditRecord
{
    protected static string $resource = LeavetypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
