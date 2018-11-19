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
        /*
        id
        ar name
        eng name
        data of birth ->optional
        phone number
        email
        career type
        career field
        connection
        howfar ->optional
        notes ->optional
        
        */
         Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arName',100);
            $table->string('enName',100);
            $table->date('bod');   
            $table->string('carT',100);
            $table->string('carF',100);
            $table->string('connec',100);
            $table->string('howfar',100);
            $table->string('notes',200);
             
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
        Schema::drop('student');
    }
}
