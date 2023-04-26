<?php

namespace App\Filament\Resources\CustomViewResource\Pages;

use App\Filament\Resources\CustomViewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomViews extends ListRecords
{
    protected static string $resource = CustomViewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
