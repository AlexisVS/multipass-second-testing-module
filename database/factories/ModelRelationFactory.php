<?php

namespace AlexisVS\MultipassSecondTestingModule\Database\Factories;

use AlexisVS\MultipassSecondTestingModule\Models\ModelRelation;
use AlexisVS\MultipassTestingModule\Models\TestingModule;
use App\Domain\Module\ModuleFactory;

class ModelRelationFactory extends ModuleFactory
{
    protected $model = ModelRelation::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'testing_module_id' => TestingModule::factory()->create(),
        ];
    }
}
