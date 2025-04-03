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
        Schema::create('Participer', function (Blueprint $table) {
            $table->unsignedBigInteger('codeParticipant'); 
            $table->unsignedBigInteger('codeMessage'); 
            $table->primary(['codeParticipant', 'codeMessage']); 
            // Define foreign key constraints
            $table->foreign('codeParticipant')->references('codeParticipant')->on('Participant')->onDelete('cascade');
            $table->foreign('codeMessage')->references('codeMessage')->on('Message')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Participer');
    }
};
