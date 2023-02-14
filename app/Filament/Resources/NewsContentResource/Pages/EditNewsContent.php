<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NewsContentResource;

class EditNewsContent extends EditRecord
{
    protected static string $resource = NewsContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
