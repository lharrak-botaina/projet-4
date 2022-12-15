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
        Schema::create('apprenant_preparation_briefs', function (Blueprint $table) {
            $table->id();
                        $table->date('Date_affectation');
            $table->bigInteger("Preparation_brief_id")->unsigned();
            $table->bigInteger("Apprenant_id")->unsigned();

            $table->foreign("Preparation_brief_id")
                ->references("id")
                ->on("preparation_brief")
                ->onDelete("cascade");
            $table->foreign("Apprenant_id")
                ->references("id")
                ->on("apprenants")
                ->onDelete("cascade");
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_preparation_briefs');
    }
};
