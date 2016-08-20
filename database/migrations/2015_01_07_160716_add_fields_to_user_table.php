<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//add soft delete option
			$table->softDeletes();
			// add bio,gender,dob,pic,country,state,city,address,postal
			$table->string('phone')->nullable();
			$table->string('dob')->nullable();
			$table->string('country')->nullable();
			$table->string('address')->nullable();
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->string('zip')->nullable();
			$table->string('gender')->nullable();
			$table->string('pic')->nullable();
			$table->boolean('subscribed')->default(0);
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('google_plus')->nullable();
			$table->string('skype')->nullable();
			$table->string('flickr')->nullable();
			$table->string('youtube')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//drop soft delete option
			$table->dropSoftDeletes();
			// delete above columns
			$table->dropColumn(array('phone', 'dob', 'country', 'address', 'state', 'city', 'zip', 'gender', 'pic','subscribed','facebook','twitter','google_plus','skype','flickr','youtube'));
		});
	}

}
