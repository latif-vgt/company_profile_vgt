<?php

namespace App\Filament\Resources\PictureInformationContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PictureInformationContentResource;

class ListPictureInformationContents extends ListRecords
{
    protected static string $resource = PictureInformationContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
