<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->unsignedInteger('user_id');
            $table->string('full_name');
            $table->string('nickname');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('gestation');
            $table->integer('birth_weight');
            $table->string('food_allergy')->nullable();
            $table->string('drug_allergy')->nullable();
            $table->string('other_allergy')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('patients');
    }
}
