<?php

use App\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VehiclesSeed extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 500; $i++) {
            Vehicle::create([
                'color'  => $faker->safeColorName(),
                'power' => $faker->randomNumber(5),
                'capacity' => $faker->randomFloat(),
                'speed' => $faker->randomFloat(5),
                'maker_id' => $faker->numberBetween(1,5)
            ]);
        }
    }

}
