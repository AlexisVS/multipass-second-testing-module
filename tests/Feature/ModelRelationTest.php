<?php

namespace AlexisVS\MultipassSecondTestingModule\Tests\Feature;

use AlexisVS\MultipassSecondTestingModule\Models\ModelRelation;
use AlexisVS\MultipassTestingModule\Models\TestingModule;

it('can get Model relations', function () {
    $model = ModelRelation::factory()->create();

    expect($model)->toBeInstanceOf(ModelRelation::class)
        ->and($model->testingModule)->toBeInstanceOf(TestingModule::class);
});
