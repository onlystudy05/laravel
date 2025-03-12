<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\DBAL\TimestampType;
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
        Schema::create("films",function(Blueprint $table){
            $table->id();
            $table->string("titre");
            $table->string("pays");
            $table->integer("annee")->unassigned()->default(2025);
            $table->string("genre");
            $table->integer("duree");
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
        Schema::dropIfExists('films');
    }
};
