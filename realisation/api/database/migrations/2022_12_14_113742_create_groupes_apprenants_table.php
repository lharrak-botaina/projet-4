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
            $table->increments('id');
            $table->unsignedInteger("Groupe_id");
            $table->foreign("Group_id")
                ->references("id")
                ->on("groupes")
                ->onDelete('cascade');
            $table->unsignedInteger("Apprenant_id");
            $table->foreign("Apprenant_id")
                    ->references("id")
                    ->on("apprenant")
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
