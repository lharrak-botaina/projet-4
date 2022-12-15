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
            $table->string('Nom_groupe');
            $table->bigInteger('Annee_formation_id')->unsigned();
            $table->foreign("Annee_formation_id")
                ->references('id')->on('annee_formation')
                ->onDelete('cascade');
            $table->bigInteger("Formateur_id")->unsigned();
            $table->foreign("Formateur_id")
                ->references("id")
                ->on("formateur")
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
