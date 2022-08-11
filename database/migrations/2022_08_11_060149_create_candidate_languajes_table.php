<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_languajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('base_idioma_id');
            $table->enum('nivel', ['basico', 'intermedio', 'avanzado', 'nativo']);
            $table->foreignId('candidate_information_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_languajes');
    }
};
