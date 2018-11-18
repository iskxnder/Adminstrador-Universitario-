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
        factory(Carrer::class, 2)->create();
    }
}
