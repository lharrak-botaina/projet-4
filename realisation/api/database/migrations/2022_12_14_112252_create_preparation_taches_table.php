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
        Schema::create('preparation_taches', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('Duree');
            $table->bigInteger('Preparation_brief_id')->unsigned();
            $table->foreign('Preparation_brief_id')
                ->references('id')
                ->on('preparation_brief')
                ->onDelete('cascade');
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
        Schema::dropIfExists('preparation_taches');
    }
};
