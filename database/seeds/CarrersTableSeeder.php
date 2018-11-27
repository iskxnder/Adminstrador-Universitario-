<?php

use Illuminate\Database\Seeder;
use App\Carrer;

class CarrersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('carrers')->insert([
           "name" =>'Informática'
       ]);
       
       \DB::table('carrers')->insert([
            "name" =>'Mecánica'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Contaduría'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Electronica'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Telecomunicaciones'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Calidad de Ambiente'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Administración'
       ]);

       \DB::table('carrers')->insert([
            "name" =>'Instrumentacion y Control'
       ]);
    }
}
