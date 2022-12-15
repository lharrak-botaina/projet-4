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
        Schema::create('groupes_apprenants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Groupe_id")->unsigned();
            $table->foreign("Groupe_id")
                ->references("id")
                ->on("groupes")
                ->onDelete('cascade');
            $table->bigInteger("Apprenant_id")->unsigned();
            $table->foreign("Apprenant_id")
                    ->references("id")
                    ->on("apprenants")
                    ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes_apprenants');
    }
};
