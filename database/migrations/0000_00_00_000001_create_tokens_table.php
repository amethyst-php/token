<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.token.data.token.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on(COnfig::get('amethyst.token.data.token-type.table'));
            $table->string('tokenizable_type');
            $table->integer('tokenizable_id')->unsigend();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.token.data.token.table'));
    }
}
