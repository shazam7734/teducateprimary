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
            $table->integer("value")->nullable();
            $table->string("name")->nullable();
            $table->string("tutorial1")->nullable();
            $table->string("tutorial2")->nullable();
            $table->string("tutorial3")->nullable();
            $table->string("instructions")->nullable();
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
