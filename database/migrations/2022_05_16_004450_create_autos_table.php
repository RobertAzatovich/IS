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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('state_number');

            $table->softDeletes();

            $table->unsignedBigInteger('auto_brand_id')->nullable();

            $table->index('auto_brand_id', 'auto_ab_idx');

            $table->foreign('auto_brand_id', 'auto_ab_fk')->on('auto_brands')->references('id');


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
        Schema::dropIfExists('autos');
    }
};
