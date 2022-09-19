<?php

namespace App\Filament\Resources\MatchesResource\Pages;

use App\Filament\Resources\MatchesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMatches extends CreateRecord
{
    protected static string $resource = MatchesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
