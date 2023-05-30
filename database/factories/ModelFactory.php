<?php

namespace AlexisVS\MultipassSecondTestingModule\Database\Factories;

use AlexisVS\MultipassTestingModule\Models\TestingModule;
use App\Domain\Module\ModuleFactory;


class ModelRelation extends ModuleFactory
{
    protected $model = ModelRelation::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'testing_module_id' => TestingModule::factory(),
        ];
    }
}

