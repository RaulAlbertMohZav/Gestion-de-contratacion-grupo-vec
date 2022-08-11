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
        Schema::create('educacions', function (Blueprint $table) {
            $table->id();
            $table->enum('escolaridad', ['secundaria', 'universidad', 'otro curso']);
            $table->string("titulo");
            $table->string("nombre_institucion");
            $table->string("año_finalizacion");
            $table->foreignId("pais_id")->constrained()->cascadeOnUpdate();
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
        Schema::dropIfExists('educacions');
    }
};
