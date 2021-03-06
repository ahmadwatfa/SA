<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->boolean('is_publish')->default(1);
            $table->string('title_ar');
            $table->text('description_ar');
            $table->string('f_point_ar');
            $table->string('desc_f_point_ar');
            $table->string('s_point_ar');
            $table->string('desc_s_point_ar');
            $table->string('th_point_ar');
            $table->string('desc_th_point_ar');
            $table->string('title_en');
            $table->text('description_en');
            $table->string('f_point_en');
            $table->string('desc_f_point_en');
            $table->string('s_point_en');
            $table->string('desc_s_point_en');
            $table->string('th_point_en');
            $table->string('desc_th_point_en');
            $table->string('user');

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
        Schema::dropIfExists('about_us');
    }
}
