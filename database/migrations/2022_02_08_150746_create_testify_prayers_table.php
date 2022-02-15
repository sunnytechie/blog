<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestifyPrayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testify_prayers', function (Blueprint $table) {
            $table->id();
            $table->string('senderName');
            $table->string('senderEmail')->nullable();
            $table->string('senderPhone');
            $table->string('senderAddress');
            $table->string('category');
            $table->text('details');

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
        Schema::dropIfExists('testify_prayers');
    }
}
