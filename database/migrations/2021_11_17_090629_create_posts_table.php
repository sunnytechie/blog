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
            $table->id();
            $table->string('title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('body')->nullable();
            $table->string('category')->nullable();
            $table->string('url')->nullable();
            $table->string('display_date')->nullable();
            $table->text('memory_verse')->nullable();
            $table->string('prayer')->nullable();
            $table->string('sound')->nullable();
            $table->string('author')->nullable();
            $table->string('event_location')->nullable();
            $table->string('slug')->nullable();
            $table->string('tag')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
