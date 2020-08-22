<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('pd_name');
            $table->integer('category_id');
            $table->integer('status');
            $table->string('pd_image');
            $table->string('fabric')->nullable();
            $table->string('details');
            $table->string('embroidery')->nullable();
            $table->string('printing')->nullable();
            $table->string('shape')->nullable();
            $table->string('rate')->nullable();
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
}
