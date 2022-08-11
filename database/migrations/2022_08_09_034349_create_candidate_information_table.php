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
        Schema::create('candidate_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('categoria_id')->constrained()->cascadeOnUpdate(); // (MATCH)
            $table->string("tiempo_experiencia"); // años de experiencia (Un numero) (MATCH)
            //$table->foreignId('experiencia_laboral_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            // Aqupi también apunta a varios idiomas
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
        Schema::dropIfExists('candidate_information');
    }
};
