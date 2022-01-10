<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myrequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('location');
            $table->integer('service_id');
            $table->string('status')->default('pending');
            $table->integer('mechanics_id')->nullable();
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
        Schema::dropIfExists('myrequests');
    }
}
