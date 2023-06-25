<?php

namespace App\Filament\Resources\LeavemanagementResource\Pages;

use App\Filament\Resources\LeavemanagementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeavemanagements extends ListRecords
{
    protected static string $resource = LeavemanagementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
