<?php

namespace App\Filament\Resources\CompanyPeopleResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CompanyPeopleResource;

class CreateCompanyPeople extends CreateRecord
{
    protected static string $resource = CompanyPeopleResource::class;
}
