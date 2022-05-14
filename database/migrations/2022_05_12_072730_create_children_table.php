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
        Schema::create('children', function (Blueprint $table) {
            
            
            $table->bigIncrements('id');
            $table->biginteger('birth_no')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mother_name');
            $table->integer('mothers_id')->unique();
            $table->integer('mother_phone');
            $table->string('father_name');
            $table->integer('father_id')->unique();
            $table->integer('father_phone');
            $table->date('dor');
            $table->date('dob');
            $table->string('birth_county');
            $table->string('resident_county');
            $table->decimal('height');
            $table->decimal('weight');
            $table->integer('gestation')->nullable();
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
        Schema::dropIfExists('children');
    }
};
