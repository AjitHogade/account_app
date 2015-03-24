<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gov_doc', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id', 50);
            $table->integer('doc_id', 50);
            $table->integer('name_on_doc', 50);
            $table->integer('name_num', 50);
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
	}

}
