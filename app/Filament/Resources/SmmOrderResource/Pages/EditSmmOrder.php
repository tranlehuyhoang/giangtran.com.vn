<?php

namespace App\Filament\Resources\SmmOrderResource\Pages;

use App\Filament\Resources\SmmOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmmOrder extends EditRecord
{
    protected static string $resource = SmmOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
