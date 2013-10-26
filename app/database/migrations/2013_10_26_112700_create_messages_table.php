<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('messages', function($table)
        {
            $table->increments('id');
            $table->string('sender');
            $table->string('content');
            $table->string('mime_type');
            $table->string('recipient');
            // one of queued, delivered, deleted
            $table->string('state');
            $table->integer('tries');
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
        Schema::drop('messages');
	}

}
