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
        Schema::create('emplois_du_temps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('matiere_id');
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->timestamps();
            
            $table->foreign('enseignant_id')->references('id')->on('enseignants');
            $table->foreign('matiere_id')->references('id')->on('matieres');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploi_du_temps');
    }
};
