<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cy_products', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('default');
            $table->string('img');
            $table->string('title');
            $table->string('content');
            $table->integer('price')->default(999999);
            $table->integer('sort')->default('0');
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
        Schema::dropIfExists('cy_products');
    }
}
