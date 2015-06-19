<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreweriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('city', 50);
            $table->string('state', 2);
            $table->text('website')->nullable();
            $table->timestamps();

            $table->unique(['name', 'city', 'state']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('breweries');
    }
}
