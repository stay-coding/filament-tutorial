<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class LogActivity extends ListActivities
{
    protected static string $resource = UserResource::class;
}
