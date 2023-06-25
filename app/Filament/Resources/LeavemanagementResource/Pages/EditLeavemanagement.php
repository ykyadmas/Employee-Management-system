<?php

namespace App\Filament\Resources\LeavemanagementResource\Pages;

use App\Filament\Resources\LeavemanagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeavemanagement extends EditRecord
{
    protected static string $resource = LeavemanagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
