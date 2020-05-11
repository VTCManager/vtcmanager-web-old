<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->string("origin")->nullable();
            $table->string("destination")->nullable();
            $table->string("cargo")->nullable();
            $table->integer("cargo_weight")->nullable();
            $table->integer("distance");
            $table->timestamp("job_finished_time")->nullable();
            $table->integer("company")->nullable();
            $table->string("status");
            $table->index("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_table');
    }
}
