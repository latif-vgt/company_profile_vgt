<?php

namespace App\Filament\Resources\CompanyPeopleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CompanyPeopleResource;

class EditCompanyPeople extends EditRecord
{
    protected static string $resource = CompanyPeopleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
