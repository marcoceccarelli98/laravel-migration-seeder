<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use DateInterval;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 50; $i++) {
            $train = new Train();

            //COMPANY
            $train->company = $faker->company();
            //DEPARTURE
            $train->departure_station = $faker->city();
            $departureDateTime = $faker->dateTimeBetween('-3 weeks', '+3 weeks');
            $train->departure_dateTime = $departureDateTime;
            //ARRIVE
            $train->arrive_station = $faker->city();
            $arriveDateTime = (clone $departureDateTime)->add(new DateInterval('PT4H'));
            $train->arrive_dateTime = $arriveDateTime;
            //INFO
            $train->train_code = $faker->bothify('??###');
            $train->carriages_num = $faker->randomDigitNot(0);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}
