<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesAndResultsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('titles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('author')->default('');
            $table->string('summery')->default('');
			$table->timestamps();
		});
        Schema::create('results', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned()->default(0);
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->string('author')->default('');
            $table->string('summery')->default('');
            $table->boolean('completed')->default(false);
            $table->text('detail')->default('');
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
		Schema::drop('titles');
        Schema::drop('results');
	}

}
