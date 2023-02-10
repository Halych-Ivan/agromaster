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
        Schema::create('tails', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('plan')->nullable();
            $table->string('exam')->nullable();
            $table->string('subject')->nullable();
            $table->string('teacher')->nullable();
            $table->string('teacher_short')->nullable();
            $table->string('student')->nullable();
            $table->string('speciality')->nullable();
            $table->string('level')->nullable();
            $table->string('group')->nullable();
            $table->string('date_in')->nullable();
            $table->string('date')->nullable();
            $table->string('mark')->nullable();
            $table->string('ects')->nullable();
            $table->string('mark_n')->nullable();
            $table->string('IP')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('tails');
    }
};
