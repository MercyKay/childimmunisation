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
        
        Schema::enableForeignKeyConstraints();
        Schema::create('immunizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('birth_no')->unsigned();
            $table->foreign('birth_no')->references('id')->on('children')->onDelete('cascade');      
            $table->datetime('bcg_at_birth');
            $table->datetime('opv_at_birth');
            $table->datetime('opv_at_6_weeks')->nullable();
            $table->datetime('opv_at_10_weeks')->nullable();
            $table->datetime('opv_at_14_weeks')->nullable();
            $table->datetime('dpt_at_6_weeks')->nullable();
            $table->datetime('dpt_at_10_weeks')->nullable();
            $table->datetime('dpt_at_14_weeks')->nullable();
            $table->datetime('pcv_at_6_weeks')->nullable();
            $table->datetime('pcv_at_10_weeks')->nullable();
            $table->datetime('pcv_at_14_weeks')->nullable();
            $table->datetime('yellow_fever_at_9_months')->nullable();
            $table->datetime('measles_at_9_months')->nullable();
            $table->date('doi');
            $table->decimal('height');
            $table->decimal('weight');
            $table->string('doctor_name');
            $table->string('license_number')->unique();
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
        Schema::dropIfExists('immunizations');
    }
};
