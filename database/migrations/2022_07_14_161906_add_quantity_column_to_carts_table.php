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
        Schema::table('carts', function (Blueprint $table) {
            $table->bigInteger('quantity');
            $table->unsignedDecimal('unit_price', 10, 2)->nullable();
            $table->unsignedDecimal('sub_total', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('quantity');
            $table->dropColumn('unit_price', 10, 2)->nullable();
            $table->dropColumn('sub_total', 10, 2)->nullable();
        });
    }
};
