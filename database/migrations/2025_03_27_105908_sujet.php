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
        Schema::create("Sujet", function (Blueprint $table) {
            $table->id("codeSujet");
            $table->string("intitule");
            $table->string("description");
            $table->unsignedBigInteger("ProposerPar"); // Define the column first
            $table->foreign("ProposerPar")->references("codeParticipant")->on("Participant"); // Apply the foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
