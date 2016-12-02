<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->text('description')->nullable();
            $table->enum('state',['Activo','Liquidado'])->default('Activo');
            $table->integer('nucleus_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('nucleus_id')->references('id')->on('nuclei');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributions');
    }
}
