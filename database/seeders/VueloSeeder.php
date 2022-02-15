<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vuelo;
class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vuelo = new Vuelo();
        $vuelo->horavuelo ="1H";
        $vuelo->nombreVuelo = "EuskAirline";
        $vuelo->save();

        $vuelo2 = new Vuelo();
        $vuelo2->horavuelo ="2H";
        $vuelo2->nombreVuelo = "ESPAirline";
        $vuelo2->save();

        Vuelo::factory(50)->create();
    }
}
