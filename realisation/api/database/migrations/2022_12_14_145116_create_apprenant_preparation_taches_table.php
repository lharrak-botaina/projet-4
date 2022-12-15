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
        Schema::create('apprenant_preparation_taches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Preparation_tache_id")->unsigned();
            $table->foreign("Preparation_tache_id")
                ->references('id')
                ->on('preparation_taches')
                ->onDelete("cascade");

            $table->bigInteger("Apprenant_id")->unsigned();
            $table->foreign("Apprenant_id")
                ->references('id')
                ->on('apprenants')
                ->onDelete("cascade");

            $table->bigInteger("Apprenant_p_Brief_id")->unsigned();
            $table->foreign("Apprenant_p_Brief_id")
                ->references('id')
                ->on('apprenant_preparation_briefs')
                ->onDelete("cascade");
            $table->string('Etat')->default('en pouse');
            $table->timestamp("date_debut")->nullable();
            $table->timestamp("date_fin")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_preparation_taches');
    }
};
