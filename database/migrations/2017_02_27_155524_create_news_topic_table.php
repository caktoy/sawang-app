<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_topic', function (Blueprint $table) {
            $table->integer('news_id')->unsigned();
            $table->integer('topic_id')->unsigned();

            $table->primary(['news_id', 'topic_id']);

            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('topic_id')->references('id')->on('topics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_topic');
    }
}
