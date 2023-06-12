<?php

namespace AlexisVS\MultipassSecondTestingModule\Models;

use AlexisVS\MultipassTestingModule\Models\TestingModule;
use App\Domain\Module\ModuleModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ModelRelation extends ModuleModel /** don't forget to extends App\Domain\Module\ModuleModel */
{
    protected $table = 'model_relations';

    public function testingModule(): BelongsTo
    {
        return $this->belongsTo(TestingModule::class, 'testing_module_id');
    }
}
