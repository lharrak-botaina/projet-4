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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_groupe')->nullable();
            $table->unsignedInteger('id_Annee_formation')->nullable();
            $table->foreign("id_Annee_formation")
                ->references("id")
                ->on('Annee_formation')
                ->onDelete('cascade');
            $table->unsignedInteger("Formateur_id")->nullable();
            $table->foreign("Formateur_id")
                ->references("id")
                ->on("Formateur")
                ->onDelete('cascade');
            $table->string('Logo');
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
        Schema::dropIfExists('groupes');
    }
};
