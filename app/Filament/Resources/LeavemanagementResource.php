<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\Leavemanagement;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LeavemanagementResource\Pages;
use App\Filament\Resources\LeavemanagementResource\RelationManagers;
use Filament\Forms\Components\DatePicker;

class LeavemanagementResource extends Resource
{
    protected static ?string $model = Leavemanagement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Select::make('employee_id')
                    ->relationship('employee', 'first_name')->required(),
                    Select::make('leavetype_id')
                    ->relationship('leavetype', 'name')->required(),

                    DatePicker::make('leave_date')->required()
                ])
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('employee.first_name')->sortable()->searchable(),
                TextColumn::make('leavetype.name')->sortable()->searchable(),
                TextColumn::make('leave_date')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListLeavemanagements::route('/'),
            'create' => Pages\CreateLeavemanagement::route('/create'),
            'edit' => Pages\EditLeavemanagement::route('/{record}/edit'),
        ];
    }
}
