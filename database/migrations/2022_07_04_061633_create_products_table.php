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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('sub_category_id')->unsigned();
            $table->bigInteger('major_accessories_id')->unsigned()->nullable();
            $table->bigInteger('accessories_id')->unsigned()->nullable();
            $table->unsignedDecimal('price', 10, 2)->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('createdBy')->unsigned();
            $table->bigInteger('updatedBy')->unsigned()->nullable();
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
        Schema::dropIfExists('products');
    }
};
