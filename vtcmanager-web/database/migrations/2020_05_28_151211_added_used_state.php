<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddedUsedState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_keys', function (Blueprint $table) {
            $table->dropColumn("client_key");
            $table->boolean("used");
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
            $table->string("client_key");
            $table->dropColumn("used");
        });
    }
}
