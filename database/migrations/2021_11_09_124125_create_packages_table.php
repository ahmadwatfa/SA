<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->enum('name_ar', ['الذهبية' , 'الفضية' , 'الأساسية']);
            $table->enum('name_en', ['Gold' , 'Silver' , 'Basic']);
            $table->string('Feature_1');
            $table->string('Feature_2');
            $table->string('Feature_3');
            $table->string('Feature_4');
            $table->string('Feature_5');
            $table->string('Feature_6');
            $table->string('Feature_7');
            $table->string('Feature_8');
            $table->string('Feature_9');
            $table->string('Feature_10');
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
        Schema::dropIfExists('packages');
    }
}
