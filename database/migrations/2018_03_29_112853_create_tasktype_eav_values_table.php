<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasktypeEavValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasktype_eav_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('task_id');
			$table->integer('task_type_eav_id');
			$table->string('task_value', 2550)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->index(['task_id','task_type_eav_id'], 'task_eav_btree');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasktype_eav_values');
	}

}
