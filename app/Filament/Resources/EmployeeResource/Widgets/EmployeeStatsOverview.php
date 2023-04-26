<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{

    protected function getCards(): array
    {
        $us = Country::query()->where('country_code', 'US')->withCount('employees')->first();
        $uk = Country::query()->where('country_code', 'UK')->withCount('employees')->first();

        if (!$uk){
            $uk = 0;
        }
        return [
            Card::make('All Employee', Employee::query()->count())
                ->description('Number Of Employee')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Card::make('US' , $us->employees_count)
                ->color('danger')
                ->description('Number Of Employee from US')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('warning')
                ->chart([7, 2, 10, 3, 15, 4, 170])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => '$emitUp("setStatusFilter", "processed")',
                ]),

            Card::make('UK', $uk->employees_count)
                ->color('danger')
                ->description('Number Of Employee from UK')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('danger')
                ->chart([7, 2, 10, 3, 15, 4, 170])
        ];
    }

}
