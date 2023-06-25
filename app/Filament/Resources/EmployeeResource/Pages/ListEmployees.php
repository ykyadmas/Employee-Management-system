<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Widgets\EmployeeStatsOverview;
use App\Filament\Resources\EmployeeResource;
use App\Models\Employee;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


}
