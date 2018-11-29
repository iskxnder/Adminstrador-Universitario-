<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('carrer_id')->unsigned();

            $table->string('name', 12);
            $table->string('surname', 12);
            $table->string('document',9)->unique();
            $table->string('email')->unique();

            $table->string('avatar')->nullable();
            
            //Relation
            $table->foreign('carrer_id')->references('id')->on('carrers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
