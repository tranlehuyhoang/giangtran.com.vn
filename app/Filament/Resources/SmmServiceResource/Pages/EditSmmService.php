<?php

namespace App\Filament\Resources\SmmServiceResource\Pages;

use App\Filament\Resources\SmmServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmmService extends EditRecord
{
    protected static string $resource = SmmServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
