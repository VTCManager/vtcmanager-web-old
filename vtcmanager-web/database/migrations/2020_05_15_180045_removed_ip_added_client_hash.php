<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovedIpAddedClientHash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_keys', function (Blueprint $table) {
            $table->dropColumn("ip");
            $table->string("client_key")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_keys', function (Blueprint $table) {
            $table->string("ip");
            $table->dropColumn("client_key");
        });
    }
}
