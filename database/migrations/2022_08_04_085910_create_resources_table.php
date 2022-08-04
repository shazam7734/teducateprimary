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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->integer("key_stage")->nullable();
            $table->integer("year")->nullable();
            $table->integer("value")->nullable();
            $table->string("name")->nullable();
            $table->string("curriculum_point")->nullable();
            $table->string("tutorial1")->nullable();
            $table->string("tutorial2")->nullable();
            $table->string("tutorial3")->nullable();
            $table->string("primary_instructions")->nullable();
            $table->string("secondary_instructions")->nullable();
            $table->string("lesson")->nullable();
            $table->string("feedback")->nullable();
            $table->string("share")->nullable();
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
        Schema::dropIfExists('resources');
    }
};