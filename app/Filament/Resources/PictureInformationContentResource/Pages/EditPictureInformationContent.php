<?php

namespace App\Filament\Resources\PictureInformationContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PictureInformationContentResource;

class EditPictureInformationContent extends EditRecord
{
    protected static string $resource = PictureInformationContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
