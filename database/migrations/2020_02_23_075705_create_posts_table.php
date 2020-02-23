<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('author_id')->unsigned();
            $table->string('title');
            $table->text('excerpt', 140);
            $table->text('desc')->nullable();
            $table->string('media')->nullable();
            $table->tinyInteger('published')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('deleted_at')->useCurrent();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
