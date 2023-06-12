<?php

namespace AlexisVS\MultipassSecondTestingModule\Database\Seeders;

use AlexisVS\MultipassSecondTestingModule\Models\ModelRelation;
use Illuminate\Database\Seeder;

class ModelRelationV000Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelRelation::factory()->count(10)->create();
    }
}
