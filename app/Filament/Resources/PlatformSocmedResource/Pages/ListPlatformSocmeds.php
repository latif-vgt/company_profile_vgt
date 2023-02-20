<?php

namespace App\Filament\Resources\PlatformSocmedResource\Pages;

use App\Filament\Resources\PlatformSocmedResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlatformSocmeds extends ListRecords
{
    protected static string $resource = PlatformSocmedResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
