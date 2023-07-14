<?php

namespace App\Filament\Resources\SeriesResource\Pages;

use App\Filament\Resources\SeriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSeries extends ViewRecord
{
    protected static string $resource = SeriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
