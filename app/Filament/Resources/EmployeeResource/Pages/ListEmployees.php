<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Filament\Resources\EmployeeResource\Widgets\EmployeeStatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\View\View;

class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return (array)EmployeeStatsOverview::class;
    }

    public function setStatusFilter($status)
    {
        dd('sss');
//        $this->filters['status'] = $status;
    }
//    public function getTableHeader():View //for return view inside table
//    {
//        return view('filament/Table/headerTable');
//    }

//    public function getTableRecordsPerPageSelectOptions(): array
//    {
//        return [10, 25, 50];
//    }

    public function getTitle(): string //to change header of table
    {
        return "Employee List";
    }


}
