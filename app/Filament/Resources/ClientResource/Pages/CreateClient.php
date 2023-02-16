<?php

namespace App\Filament\Resources\ClientResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\ClientResource;
use Filament\Resources\Pages\CreateRecord;

class CreateClient extends CreateRecord
{
    protected static string $resource = ClientResource::class;
}