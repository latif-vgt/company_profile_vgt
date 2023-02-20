<?php

namespace App\Filament\Resources\OurServiceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\OurServiceResource;

class ListOurServices extends ListRecords
{
    protected static string $resource = OurServiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
