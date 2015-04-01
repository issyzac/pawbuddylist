<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('pet', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('appearance_id');
            $table->string('pet_name');
            $table->string('pet_age');
            $table->string('pet_price');
            $table->string('pet_amount');
            $table->integer('pet_image_id');
            $table->string('remember_token');
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
		//
        Schema::drop('pet');
	}

}
