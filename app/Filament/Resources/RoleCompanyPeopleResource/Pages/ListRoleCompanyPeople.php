<?php

namespace App\Filament\Resources\RoleCompanyPeopleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\RoleCompanyPeopleResource;

class ListRoleCompanyPeople extends ListRecords
{
    protected static string $resource = RoleCompanyPeopleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
