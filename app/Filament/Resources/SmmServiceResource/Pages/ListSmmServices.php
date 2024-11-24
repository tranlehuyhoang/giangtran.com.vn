<?php

namespace App\Filament\Resources\SmmServiceResource\Pages;

use App\Filament\Resources\SmmServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmmServices extends ListRecords
{
    protected static string $resource = SmmServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
