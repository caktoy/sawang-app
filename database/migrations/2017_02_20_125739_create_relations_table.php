<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('relation_id')->unsigned();
            $table->boolean('priority');
            $table->timestamps();

            $table->primary(['user_id', 'relation_id']);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('relation_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
}
