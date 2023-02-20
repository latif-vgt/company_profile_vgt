<?php

namespace App\Filament\Resources\CompanyPeopleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CompanyPeopleResource;

class ListCompanyPeople extends ListRecords
{
    protected static string $resource = CompanyPeopleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
