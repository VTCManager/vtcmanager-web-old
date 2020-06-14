<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrandToTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trucks_table', function (Blueprint $table) {
            $table->dropColumn("manufacturer");
            $table->string("brand_id");
            $table->dropColumn("created_at");
            $table->dropColumn("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trucks_table', function (Blueprint $table) {
            $table->dropColumn("brand_id");
            $table->string("manufacturer");
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
        });
    }
}
