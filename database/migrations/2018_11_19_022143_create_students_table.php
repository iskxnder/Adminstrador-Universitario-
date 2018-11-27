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
            $table->string('document',9);
            $table->string('email', 20);
            $table->string('sex', 12);
            $table->string('nationality', 20);

            $table->string('file')->nullable();
            
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
