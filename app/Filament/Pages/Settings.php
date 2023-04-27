<?php

namespace App\Filament\Pages;
use Filament\Pages\Actions\Action;

use Filament\Pages\Page;
use Illuminate\View\View;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $navigationLabel = 'Custom Navigation Label Settings';


    public function ClickMe()
    {
        dd('click me');
    }


    //for add custom header and footer
//    protected function getHeader(): View
//    {
//        return view('filament.settings.custom-header');
//    }
//
//    protected function getFooter(): View
//    {
//        return view('filament.settings.custom-footer');
//    }

}
