<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avisos', function(Blueprint $table)
		{
			$table->increments('AVI_CODIGO');
			//$table->string('AVI_TITULO');
			$table->integer('AVI_PRECIO');
			/*$table->string('AVI_TIPO_PROP');
			$table->integer('AVI_SUPERFICIE');
			$table->integer('AVI_NUM_DORMITORIOS');
			$table->string('AVI_TELEFONO');
			$table->string('AVI_UNIVERSIDADES');
			$table->string('DESCRIPCION');
			$table->integer('AVI_NUM_ESTACIONAMIENTOS');
			$table->integer('AVI_NUM_BAÑOS');
			$table->boolean('AVI_VISIBILIDAD');
			$table->string('AVI_DIRECCION');
			$table->string('AVI_COMUNA');
			$table->string('AVI_REGION');*/
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
		Schema::drop('avisos');
	}

}
