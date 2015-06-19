<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brewery_id')->unsigned()->nullable();
            $table->integer('style_id')->unsigned()->nullable();
            $table->string('name');
            $table->enum('type', ['All Grain', 'Extract', 'Partial Mash']);
            $table->string('yield');
            $table->decimal('original_g', 4, 3)->nullable();
            $table->decimal('final_g', 4, 3)->nullable();
            $table->decimal('alcohol', 3, 1)->nullable();
            $table->decimal('bitterness', 3, 1)->nullable();
            $table->timestamps();

            $table->unique(['name', 'brewery_id']);

            $table->foreign('brewery_id')->references('id')->on('breweries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('style_id')->references('id')->on('styles')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipes');
    }
}
