<?php

namespace App\Filament\Resources\InformationContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\InformationContentResource;

class EditInformationContent extends EditRecord
{
    protected static string $resource = InformationContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
