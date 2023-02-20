<?php

namespace App\Filament\Resources\RoleCompanyPeopleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\RoleCompanyPeopleResource;

class EditRoleCompanyPeople extends EditRecord
{
    protected static string $resource = RoleCompanyPeopleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
