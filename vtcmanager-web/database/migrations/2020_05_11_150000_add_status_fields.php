<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs_table', function (Blueprint $table) {
            $table->boolean("started");
            $table->boolean("canceled");
            $table->boolean("finished");
            $table->boolean("accepted");
            $table->boolean("declined");
            $table->boolean("pending_verification");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs_table', function (Blueprint $table) {
            $table->boolean("started");
            $table->boolean("canceled");
            $table->boolean("finished");
            $table->boolean("accepted");
            $table->boolean("declined");
            $table->boolean("pending_verification");
        });
    }
}
