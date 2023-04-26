<?php

namespace App\Filament\Resources\CustomViewResource\Pages;

use App\Filament\Resources\CustomViewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomView extends EditRecord
{
    protected static string $resource = CustomViewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
