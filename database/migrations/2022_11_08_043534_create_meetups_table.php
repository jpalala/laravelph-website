<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registration_url')->nullable();
            $table->text('blurb')->nullable();
            $table->text('topics')->nullable();
            $table->dateTime('time_start')->nullable();
            $table->dateTime('time_end');
            $table->string('timezone', 20);
            $table->string('duration', 10)->nullable();
            $table->boolean('is_bootcamp')->default(true);
            $table->boolean('is_online')->nullable()->default(true);
            $table->boolean('allow_registration')->default(true);
            $table->integer('rank')->default(1);
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
        Schema::dropIfExists('meetups');
    }
}
