<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50)->unique();
            $table->string('slug', 50)->unique();
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedInteger('owner_id');
            $table->enum('status', ['Created', 'In Progress', 'On Hold', 'Completed', 'Closed'])->default('Created');
            $table->date('estimated_completion_date')->nullable();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
