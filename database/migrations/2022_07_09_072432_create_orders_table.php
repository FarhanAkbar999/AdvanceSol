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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_email');            
            $table->string('countryName');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('companyName')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('State');
            $table->integer('zipcode');
            $table->string('phoneNumber');
            $table->string('role')->nullable();
            $table->string('industry')->nullable();
            $table->string('subIndustry')->nullable();
            $table->string('federal_tax_id')->nullable();
            $table->string('contractor_license_no')->nullable();
            $table->string('no_license_reason')->nullable();
            $table->float('order_total', 8, 2);
            $table->string('payment_method')->nullable();
            $table->string('transaction_id');
            $table->string('currency');
            $table->string('order_id');
            $table->string('invoice_no');
            $table->string('order_date');
            $table->string('order_month');
            $table->string('order_year');
            $table->string('confirmed_date')->nullable();
            $table->string('processing_date')->nullable();
            $table->string('picked_date')->nullable();
            $table->string('shipped_date')->nullable();
            $table->string('delivered_date')->nullable();
            $table->string('cancel_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('return_reason')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
};
