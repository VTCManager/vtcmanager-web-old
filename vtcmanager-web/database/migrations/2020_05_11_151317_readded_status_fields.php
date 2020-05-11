<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReaddedStatusFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs_table', function (Blueprint $table) {
            $table->boolean("started")->default(true);
            $table->boolean("canceled")->default(false);
            $table->boolean("finished")->default(false);
            $table->boolean("accepted")->default(false);
            $table->boolean("declined")->default(false);
            $table->boolean("pending_verification")->default(false);
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
            $table->dropColumn('started');
            $table->dropColumn('canceled');
            $table->dropColumn('finished');
            $table->dropColumn('accepted');
            $table->dropColumn('declined');
            $table->dropColumn('pending_verification');
        });
    }
}
