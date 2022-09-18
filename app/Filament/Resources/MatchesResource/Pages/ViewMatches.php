<?php

namespace App\Filament\Resources\MatchesResource\Pages;

use App\Filament\Resources\MatchesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMatches extends ViewRecord
{
    protected static string $resource = MatchesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
