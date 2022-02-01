<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_first_name')->nullable();
            $table->string('user_last_name')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_state')->nullable();
            $table->string('user_zip')->nullable();
            $table->string('user_country')->nullable();
            $table->string('user_thumbnail')->nullable();
            $table->string('user_occupation_title')->nullable();
            $table->string('user_company')->nullable();
            $table->string('user_facebook')->nullable();
            $table->string('user_twitter')->nullable();
            $table->string('user_instagram')->nullable();
            $table->string('user_linkedin')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
