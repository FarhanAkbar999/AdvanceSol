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
        Schema::create('product_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('pscName');
            $table->text('pscDetails');
            $table->string('pscSlug')->unique();
            $table->bigInteger('pscCategoryId')->unsigned();
            $table->boolean('pscQuickShip')->nullable();
            $table->string('pscImage')->nullable();
            $table->unsignedDecimal('pscPrice', 10, 2);
            $table->bigInteger('pscCreatedBy')->unsigned();
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
        Schema::dropIfExists('product_sub_categories');
    }
};
