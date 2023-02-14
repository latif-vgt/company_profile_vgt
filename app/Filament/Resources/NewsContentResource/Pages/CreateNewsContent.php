<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NewsContentResource;

class CreateNewsContent extends CreateRecord
{
    protected static string $resource = NewsContentResource::class;
}
