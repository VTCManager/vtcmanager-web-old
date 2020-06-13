<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddedNewFieldsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs_table', function (Blueprint $table) {
            $table->dropColumn("origin");
            $table->dropColumn("destination");

            $table->string("origin_id");
            $table->string("origin_company_id");

            $table->string("destination_id");
            $table->string("destination_company_id");

            $table->dateTime("delivery_deadline");
            $table->string("freight_market");
            $table->float("fuel_at_beginning");
            $table->string("cargo_id");
            $table->float("truck_damage_at_beginning");
            $table->dateTime("delivered_time")->nullable();
            $table->float("cargo_damage")->nullable();
            $table->float("fuel_at_end")->nullable();
            $table->float("truck_damage_at_end")->nullable();
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
            $table->string("origin");
            $table->string("destination");
            $table->dropColumn("origin_id");
            $table->dropColumn("destination_id");
            $table->dropColumn("origin_company");
            $table->dropColumn("origin_company_id");
            $table->dropColumn("destination_company");
            $table->dropColumn("destination_company_id");
            $table->dropColumn("delivery_deadline");
            $table->dropColumn("freight_market");
            $table->dropColumn("fuel_at_beginning");
            $table->dropColumn("truck_damage_at_beginning");
            $table->dropColumn("delivered_time");
            $table->dropColumn("cargo_damage");
            $table->dropColumn("fuel_at_end");
            $table->dropColumn("truck_damage_at_end");
        });
    }
}
