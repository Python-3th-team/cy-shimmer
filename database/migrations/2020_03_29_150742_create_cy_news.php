<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cy_news', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->date('date');
            $table->string('title')->default('title');
            $table->string('txtdate')->default('yyyy/mm/dd');
            $table->string('location')->default('千暘植務');
            $table->string('content')->nullable('test');
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
        Schema::dropIfExists('cy__news');
    }
}
