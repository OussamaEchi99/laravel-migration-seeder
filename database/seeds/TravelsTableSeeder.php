<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $gender = [
            'Male',
            'Female'
        ];

        $vehicle = [
            'Bus',
            'Airplane',
            'Train',
            'Cruise'
        ];

        $private = [
            'Private',
            'Company'
        ];

        for ($i=0; $i < 10; $i++) { 
            $new_travel = new Travel();
            $new_travel->name = $faker->firstName($gender);
            $new_travel->lastname = $faker->lastname();
            $new_travel->gender = $faker->randomElement($gender);
            $new_travel->age = rand(1, 120);
            $new_travel->Depart = $faker->date();
            $new_travel->Return = $faker->date();
            $new_travel->city = $faker->city();
            $new_travel->vehicle = $faker->randomElement($vehicle);
            $new_travel->people = rand(0, 100);
            $new_travel->telephone = $faker->e164PhoneNumber();
            $new_travel->ticket_code = $faker->ean8();
            $new_travel->price = rand(20, 400000);
            $new_travel->is_available = rand(0, 1);
            $new_travel->private = $faker->randomElement($private);
            $new_travel->save();
        }
    }
}
