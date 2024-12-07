<?php

namespace App\Filament\Resources\SmmServiceResource\Pages;

use App\Filament\Resources\SmmServiceResource;
use App\Models\SmmService;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;
class ListSmmServices extends ListRecords
{
    protected static string $resource = SmmServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
            ->processCollectionUsing(function (string $modelClass, Collection $collection) {
                    $collection->transform(function ($item) {
                        return $item;
                    });
                    foreach ($collection as $item) {
                        SmmService::create($item->toArray()); // Chuyển đổi item thành mảng
                    }
            }),
            Actions\CreateAction::make(),
        ];
    }
}
