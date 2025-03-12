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
         Schema::create("participations",function(Blueprint $table){
            $table->id();
            $table->integer("films_id");
            $table->foreign("films_id")->references("id")->on("films")->unique();
            $table->integer("acteur_id");
            $table->integer("acteur_id")->references("id")->on("acteurs")->unique();
            $table->string("role");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');

    }
};
