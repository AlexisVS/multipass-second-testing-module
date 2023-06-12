<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('model_relations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('testing_module_id')->constrained('testing_modules');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('model_relations');
    }
};
