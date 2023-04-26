<?php

namespace App\Filament\Resources\CustomViewResource\Pages;

use App\Filament\Resources\CustomViewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomView extends CreateRecord
{
    protected static string $resource = CustomViewResource::class;
}
