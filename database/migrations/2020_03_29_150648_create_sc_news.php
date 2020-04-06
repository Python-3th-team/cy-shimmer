<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sc_news', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->date('date');
            $table->string('title')->default('title');
            $table->string('txtdate')->default('yyyy/mm/dd');
            $table->string('location')->default('微光寓所');
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
        Schema::dropIfExists('sc__news');
    }
}
