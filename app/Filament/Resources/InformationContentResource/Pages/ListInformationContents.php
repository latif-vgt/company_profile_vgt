<?php

namespace App\Filament\Resources\InformationContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\InformationContentResource;

class ListInformationContents extends ListRecords
{
    protected static string $resource = InformationContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
