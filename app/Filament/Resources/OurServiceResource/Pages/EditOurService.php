<?php

namespace App\Filament\Resources\OurServiceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\OurServiceResource;

class EditOurService extends EditRecord
{
    protected static string $resource = OurServiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
