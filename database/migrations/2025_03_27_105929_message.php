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
        Schema::create("Message", function (Blueprint $table) {
            $table->id("codeMessage"); // Primary key
            $table->string("Titre");
            $table->string("Texte");
            $table->date("dateMessage");
            $table->unsignedBigInteger("codeSujet"); // Define foreign key column
            $table->foreign("codeSujet")->references("codeSujet")->on("Sujet"); // Link to the correct primary key
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
