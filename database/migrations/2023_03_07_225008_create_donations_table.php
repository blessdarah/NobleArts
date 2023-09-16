<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('transId');
            $table->string('status');
            $table->string('medium');
            $table->string('service_name');
            $table->integer('amount');
            $table->integer('revenue');
            $table->string('email');
            $table->string('financial_trans_id');
            $table->dateTime('initiated_on');
            $table->string('confirmed_on');
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
        Schema::dropIfExists('donations');
    }
};
