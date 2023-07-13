<?php

namespace App\Filament\Resources\PostSeriesResource\Pages;

use App\Filament\Resources\PostSeriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostSeries extends ViewRecord
{
    protected static string $resource = PostSeriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
