<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addroutes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('days', ['mon', 'tue', 'wed', 'thur', 'fri', 'sat', 'sun']);
            $table->enum('route', ['1', '2', '3', '4', '5', '6', '7']);
            $table->enum('time', ['mor', 'aft', 'evn', 'nit']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addroutes');
    }
}
