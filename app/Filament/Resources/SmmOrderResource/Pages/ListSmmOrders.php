<?php

namespace App\Filament\Resources\SmmOrderResource\Pages;

use App\Filament\Resources\SmmOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\SmmOrderResource\Widgets\SmmOrderOverview;

class ListSmmOrders extends ListRecords
{
    protected static string $resource = SmmOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getHeaderWidgets(): array
    {
        return [
            SmmOrderOverview::class,
        ];
    }
}
