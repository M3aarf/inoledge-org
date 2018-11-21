<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arName',100);
            $table->string('enName',100);
            $table->date('bod');   //null
            $table->string('carT',100);
            $table->string('carF',100);
            $table->string('connec',100);
            $table->string('howfar',100)->nullable()->change();; //null
            $table->string('notes',200)->nullable()->change();; //null
             
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('student');
    }
}
