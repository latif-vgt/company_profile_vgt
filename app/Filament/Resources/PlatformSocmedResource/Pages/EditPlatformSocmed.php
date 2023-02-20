<?php

namespace App\Filament\Resources\PlatformSocmedResource\Pages;

use App\Filament\Resources\PlatformSocmedResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlatformSocmed extends EditRecord
{
    protected static string $resource = PlatformSocmedResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
