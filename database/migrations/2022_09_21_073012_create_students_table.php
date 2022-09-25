<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 15)->unique();
            $table->string('nis', 15)->unique();
            $table->string('name');
            $table->string('born_place');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('religion');
            $table->string('status');
            $table->string('siblings');
            $table->string('address');
            $table->string('phone_number');
            $table->string('school');
            $table->date('accepted_date');
            $table->string('father');
            $table->string('mother');
            $table->string('father_jobs');
            $table->string('mother_jobs');
            $table->string('caregiver')->nullable();
            $table->string('caregiver_jobs')->nullable();
            $table->string('caregiver_address')->nullable();
            $table->string('url')->nullable();
            $table->foreignId('room_id');
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
        Schema::dropIfExists('students');
    }
}
