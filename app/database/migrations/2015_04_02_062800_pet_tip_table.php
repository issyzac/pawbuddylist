<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetTipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //
        Schema::create('pet_tip', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pet_type_id');
            $table->integer('pet_category_id');
            $table->integer('tip_about');
            $table->string('tip_description');
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
        Schema::drop('pet_tip');
	}

}
