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
            $table->unsignedInteger("Preparation_tache_id");
            $table->foreign("Preparation_tache_id")
                ->references('id')
                ->on('preparation_tache')
                ->onDelete("cascade");

            $table->unsignedInteger("Apprenant_id");
            $table->foreign("Apprenant_id")
                ->references('id')
                ->on('apprenant')
                ->onDelete("cascade");

            $table->unsignedInteger("Apprenant_preparationBrief_id");
            $table->foreign("Apprenant_preparationBrief_id")
                ->references('id')
                ->on('apprenant_preparation_brief')
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
