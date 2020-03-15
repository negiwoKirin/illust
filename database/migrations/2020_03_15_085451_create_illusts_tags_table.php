<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illusts_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('illust_id')->unsigned()->comment('illustsテーブルのid');
            $table->bigInteger('tag_id')->unsigned()->comment('tagsテーブルのid');
            $table->timestamps();

            $table->foreign('illust_id')->references('id')->on('illusts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illusts_tags');
    }
}
