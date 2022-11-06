<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_testings', function (Blueprint $table) {

            $table->string('Product_id');
            $table->string('Testing_id');

            $table->string('Product_status');
            $table->string('image');
            $table->string('Product_category')->nullable();
            $table->string('Product_name');
            $table->string('tester_name');
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
        Schema::dropIfExists('product_testings');
    }
};
