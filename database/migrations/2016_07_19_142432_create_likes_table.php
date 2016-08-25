<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::connection('mysql')->create('likes', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('post_id');
			$table->boolean('like');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('likes');
	}
}
