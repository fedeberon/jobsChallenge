<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue')->index();
            $table->string('job');
            $table->string('user');
            $table->string('name');
            $table->string('type');
            $table->string('delay');
            $table->timestamp('date')->default(\Carbon\Carbon::now());
            $table->timestamp('start')->nullable();
            $table->timestamp('finish')->nullable();
            $table->integer('status');
            $table->unsignedTinyInteger('attempts');
            $table->boolean('fullscan')->nullable();
            $table->string('origin')->nullable();
            $table->string('mode')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_events');
    }
}
