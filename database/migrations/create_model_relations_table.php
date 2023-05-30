<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('multipass_second_testing_modules_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('testing_module_id')->constrained('testing_module_table');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('multipass_second_testing_modules_table');
    }
};
