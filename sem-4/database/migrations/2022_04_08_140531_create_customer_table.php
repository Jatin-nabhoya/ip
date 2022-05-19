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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('email',60);
            $table->enum('gender',["M","F","O"])->nullable();
            $table->date('dob')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('address',100);
            $table->string('city',50)->nullable();
            // $table->string('state',50);
            // $table->string('country',50);
            // $table->string('pincode',10);
            $table->string('password',60);
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('customer');
    }
};
