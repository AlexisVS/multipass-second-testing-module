<?php

namespace AlexisVS\MultipassSecondTestingModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexisVS\MultipassSecondTestingModule\MultipassSecondTestingModule
 */
class MultipassSecondTestingModule extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexisVS\MultipassSecondTestingModule\MultipassSecondTestingModule::class;
    }
}
