<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<30; $i++){
            $animals = new Animal();
            $animals->name = $faker->word(20);
            $animals->species = $faker->word(20);
            $animals->weight = $faker->word(20);
            $animals->alimentation= $faker->word(20);
            $animals->extintion = $faker->word(20);
            $animals->colour = $faker->word(20);
            $animals->save();
        }
    }
}
