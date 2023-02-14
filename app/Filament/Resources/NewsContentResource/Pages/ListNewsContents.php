<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\NewsContentResource;

class ListNewsContents extends ListRecords
{
    protected static string $resource = NewsContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
