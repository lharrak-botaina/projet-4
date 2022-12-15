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
        Schema::create('groupes_preparation_briefs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Apprenant_p_brief_id")->unsigned();
            $table->foreign("Apprenant_p_brief_id")
                ->references("id")
                ->on('Apprenant_preparation_briefs')
                ->onDelete('cascade');
            $table->bigInteger("Groupe_id")->unsigned();
            $table->foreign("Groupe_id")
                ->references("id")
                ->on('groupes')
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
        Schema::dropIfExists('groupes_preparation_briefs');
    }
};
