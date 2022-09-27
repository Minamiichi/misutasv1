<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmutations', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('entry');
            $table->string('nisn');
            $table->string('name');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('school');
            $table->string('category');
            $table->string('address');
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
        Schema::dropIfExists('inmutations');
    }
}
