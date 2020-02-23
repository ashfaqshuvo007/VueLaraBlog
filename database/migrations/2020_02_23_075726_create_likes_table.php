<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('owner_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('deleted_at')->useCurrent();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('subscribers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
