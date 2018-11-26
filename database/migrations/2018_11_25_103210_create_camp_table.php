<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('camp', function (Blueprint $table)
                         {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->date('camp_date',100);
            $table->integer('sessions_num')->unsigned(); 
            $table->integer('hours')->unsigned();
            $table->string('start_end',100);
            $table->integer('cost')->unsigned();
            $table->string('day',50);
            $table->string('instructor',100);
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
        Schema::dropIfExists('camp');
    }
}
