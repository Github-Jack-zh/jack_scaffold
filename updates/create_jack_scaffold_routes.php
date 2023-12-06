<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAndPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function getConnection()
    {
        return config('database.connection') ?: config('database.default');
    }
    public function up()
    {
        if (! Schema::hasTable('jack_scaffold_routes')) {
            Schema::create('jack_scaffold_routes', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->string('prefix', 50);
                $table->string('route',100);
                $table->string('class',100);
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('jack_scaffold_routes')) {
//        Schema::dropIfExists('jack_scaffold_routes');
        }

    }
};
