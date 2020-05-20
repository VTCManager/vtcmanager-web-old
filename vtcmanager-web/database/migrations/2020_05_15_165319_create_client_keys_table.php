<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_keys', function (Blueprint $table) {
            $table->string("key")->primary();
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->string("description")->nullable();
            $table->string("ip");
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
        Schema::dropIfExists('client_keys');
    }
}
