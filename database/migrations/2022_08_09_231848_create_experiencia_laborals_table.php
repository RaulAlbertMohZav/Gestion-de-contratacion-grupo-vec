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
        Schema::create('experiencia_laborals', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_cargo");
            $table->foreignId('pais_id')->constrained()->cascadeOnUpdate();
            $table->foreignId("actividad_id")->constrained()->cascadeOnUpdate();
            $table->string("compania");
            $table->foreignId("categoria_id")->constrained()->cascadeOnUpdate();
            $table->foreignId("cargo_desempenado_id")->constrained()->cascadeOnUpdate();
            $table->foreignId("salario_id")->constrained()->cascadeOnUpdate();
            $table->string("fecha_inicio_trabajo")->nullable();
            $table->string("fecha_final_trabajo")->nullable();
            $table->text("beneficios");
            $table->text("descripcion");

            // Aquí se guarda a que candidato pertenece esta experiencia
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
        Schema::dropIfExists('experiencia_laborals');
    }
};
