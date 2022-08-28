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
        Schema::create('refunable_samples', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); 
            $table->text('details');
            $table->string('slug')->unique();
            $table->bigInteger('categoryId')->unsigned();
            $table->bigInteger('subCategoryId')->unsigned();
            $table->string('image')->nullable();
            $table->unsignedDecimal('price', 10, 2);
            $table->bigInteger('createdBy')->unsigned();
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
        Schema::dropIfExists('refunable_samples');
    }
};
