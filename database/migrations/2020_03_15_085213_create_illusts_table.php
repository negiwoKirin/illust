<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illusts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('イラストのタイトル');
            $table->bigInteger('user_id')->unsigned()->comment('投稿者のID');
            $table->string('pasth')->comment('イラストの保存場所');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illusts');
    }
}
