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
        Schema::create("Participant", function(Blueprint $table){
            $table->id("codeParticipant");
            $table->string("nom");
            $table->string("email");
            $table->date("dateNaissance");
            $table->string("MotdePasse");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Participant");
    }
};
