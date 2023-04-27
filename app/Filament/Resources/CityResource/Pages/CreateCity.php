<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use Filament\Pages\Actions;
use Filament\Notifications\Notification;

use Filament\Resources\Pages\CreateRecord;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function getRedirectUrl(): string //Customizing form redirects
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string //Customizing the save notification
    {
        return 'City Saved';
    }

    protected function getCreatedNotification(): ?Notification//Customizing the save notification
    {
        return Notification::make()
            ->success()
            ->title('City Saved Successfully')
            ->body('The City has been created successfully.');
    }
}
