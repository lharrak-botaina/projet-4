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
        Schema::create('preparation_brief', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Description');
            $table->decimal('Duree');
            $table->bigInteger('Formateur_id')->unsigned();
            $table->foreign('Formateur_id')->references('id')->on('formateur')->onDelete('cascade');
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
        // Schema::dropIfExists('preparation_brief');
    }
};
