<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factorys', function (Blueprint $table) {
            $table->id();
            $table->string('factory_on');
            $table->integer('machine_basic');
            $table->integer('machine_other');
            $table->integer('production_apacity');
            $table->integer('employe_male');
            $table->integer('employe_female');
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
        Schema::dropIfExists('factorys');
    }
}
