<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::connection('mysql')->create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('name');
			$table->string('password');
			$table->boolean('activated')->default(false);
			$table->rememberToken();
			$table->timestamps();
		});

		// using a db to migrate data from

		// $users = DB::connection('old_db')->table('utilizadores')->get();

		// foreach ($users as $user) {
		//  DB::connection('mysql')->table('users')->insert([
		//      'first_name' => $user->nome,
		//      'email' => $user->email,
		//      'password' => bcrypt(123456),
		//  ]);
		// }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('users');
	}
}
