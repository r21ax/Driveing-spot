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
            $table->bigIncrements('id')->nullable();
            $table->integer('prefecture_id')->unsigned()->nullable();
            $table->string('address', 100)->nullable();
            $table->string('comment', 100)->nullable();
            $table->string('title', 100)->nullable();;
            $table->string('image')->nullable();
            $table->integer('user_id')->unsigned()->nullable();;
            $table->timestamps();
            $table->softDeletes();
            
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
