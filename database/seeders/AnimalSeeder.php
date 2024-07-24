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
    // usando le fillable - guarda il model
    $animalsData = [
            [
                'name' => 'African Elephant',
                'species' => 'Loxodonta africana',
                'weight' => 6000,
                'alimentation' => 'Herbivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Gray',
                'habitat' => 'Savannah, Forest',
                'life_duration' => 70,
            ],
            [
                'name' => 'Bald Eagle',
                'species' => 'Haliaeetus leucocephalus',
                'weight' => 6,
                'alimentation' => 'Carnivore',
                'extintion' => 'Least Concern',
                'colour' => 'Brown, White',
                'habitat' => 'Near water bodies',
                'life_duration' => 20,
            ],
            [
                'name' => 'Bengal Tiger',
                'species' => 'Panthera tigris tigris',
                'weight' => 220,
                'alimentation' => 'Carnivore',
                'extintion' => 'Endangered',
                'colour' => 'Orange, Black stripes',
                'habitat' => 'Tropical forest, Grassland',
                'life_duration' => 15,
            ],
            [
                'name' => 'Blue Whale',
                'species' => 'Balaenoptera musculus',
                'weight' => 140000,
                'alimentation' => 'Carnivore (Krill)',
                'extintion' => 'Endangered',
                'colour' => 'Blue-gray',
                'habitat' => 'Ocean',
                'life_duration' => 90,
            ],
            [
                'name' => 'Chimpanzee',
                'species' => 'Pan troglodytes',
                'weight' => 50,
                'alimentation' => 'Omnivore',
                'extintion' => 'Endangered',
                'colour' => 'Black, Brown',
                'habitat' => 'Tropical forest, Savanna',
                'life_duration' => 40,
            ],
            [
                'name' => 'Emperor Penguin',
                'species' => 'Aptenodytes forsteri',
                'weight' => 40,
                'alimentation' => 'Carnivore',
                'extintion' => 'Near Threatened',
                'colour' => 'Black, White, Yellow',
                'habitat' => 'Antarctic',
                'life_duration' => 20,
            ],
            [
                'name' => 'Giant Panda',
                'species' => 'Ailuropoda melanoleuca',
                'weight' => 100,
                'alimentation' => 'Herbivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Black, White',
                'habitat' => 'Bamboo forest',
                'life_duration' => 20,
            ],
            [
                'name' => 'Golden Eagle',
                'species' => 'Aquila chrysaetos',
                'weight' => 6,
                'alimentation' => 'Carnivore',
                'extintion' => 'Least Concern',
                'colour' => 'Dark brown, Golden feathers on the back of the head',
                'habitat' => 'Mountains, Hills',
                'life_duration' => 25,
            ],
            [
                'name' => 'Great White Shark',
                'species' => 'Carcharodon carcharias',
                'weight' => 1100,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Gray, White',
                'habitat' => 'Coastal waters',
                'life_duration' => 70,
            ],
            [
                'name' => 'Harpy Eagle',
                'species' => 'Harpia harpyja',
                'weight' => 9,
                'alimentation' => 'Carnivore',
                'extintion' => 'Near Threatened',
                'colour' => 'Gray, White, Black',
                'habitat' => 'Tropical forest',
                'life_duration' => 35,
            ],
            [
                'name' => 'Hippopotamus',
                'species' => 'Hippopotamus amphibius',
                'weight' => 1500,
                'alimentation' => 'Herbivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Gray, Pink',
                'habitat' => 'Rivers, Lakes',
                'life_duration' => 40,
            ],
            [
                'name' => 'Jaguar',
                'species' => 'Panthera onca',
                'weight' => 100,
                'alimentation' => 'Carnivore',
                'extintion' => 'Near Threatened',
                'colour' => 'Yellow, Black spots',
                'habitat' => 'Rainforest, Savanna',
                'life_duration' => 15,
            ],
            [
                'name' => 'King Cobra',
                'species' => 'Ophiophagus hannah',
                'weight' => 6,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Brown, Green, Yellow',
                'habitat' => 'Forest, Grassland',
                'life_duration' => 20,
            ],
            [
                'name' => 'Koala',
                'species' => 'Phascolarctos cinereus',
                'weight' => 14,
                'alimentation' => 'Herbivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Gray, White',
                'habitat' => 'Eucalyptus forest',
                'life_duration' => 20,
            ],
            [
                'name' => 'Leopard',
                'species' => 'Panthera pardus',
                'weight' => 60,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Yellow, Black spots',
                'habitat' => 'Forest, Grassland',
                'life_duration' => 15,
            ],
            [
                'name' => 'Lion',
                'species' => 'Panthera leo',
                'weight' => 190,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Tan',
                'habitat' => 'Savanna, Grassland',
                'life_duration' => 14,
            ],
            [
                'name' => 'Mountain Gorilla',
                'species' => 'Gorilla beringei beringei',
                'weight' => 160,
                'alimentation' => 'Herbivore',
                'extintion' => 'Endangered',
                'colour' => 'Black',
                'habitat' => 'Mountain forest',
                'life_duration' => 35,
            ],
            [
                'name' => 'Narwhal',
                'species' => 'Monodon monoceros',
                'weight' => 900,
                'alimentation' => 'Carnivore',
                'extintion' => 'Near Threatened',
                'colour' => 'Gray, White spots',
                'habitat' => 'Arctic waters',
                'life_duration' => 50,
            ],
            [
                'name' => 'Orangutan',
                'species' => 'Pongo pygmaeus',
                'weight' => 80,
                'alimentation' => 'Omnivore',
                'extintion' => 'Critically Endangered',
                'colour' => 'Reddish-brown',
                'habitat' => 'Tropical forest',
                'life_duration' => 40,
            ],
            [
                'name' => 'Polar Bear',
                'species' => 'Ursus maritimus',
                'weight' => 450,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'White',
                'habitat' => 'Arctic',
                'life_duration' => 25,
            ],
            [
                'name' => 'Red Panda',
                'species' => 'Ailurus fulgens',
                'weight' => 5,
                'alimentation' => 'Omnivore',
                'extintion' => 'Endangered',
                'colour' => 'Reddish-brown, White face markings',
                'habitat' => 'Temperate forest',
                'life_duration' => 14,
            ],
            [
                'name' => 'Snow Leopard',
                'species' => 'Panthera uncia',
                'weight' => 45,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Gray, Black spots',
                'habitat' => 'Mountain range',
                'life_duration' => 15,
            ],
            [
                'name' => 'Tasmanian Devil',
                'species' => 'Sarcophilus harrisii',
                'weight' => 8,
                'alimentation' => 'Carnivore',
                'extintion' => 'Endangered',
                'colour' => 'Black, White markings',
                'habitat' => 'Forest, Grassland',
                'life_duration' => 5,
            ],
            [
                'name' => 'Walrus',
                'species' => 'Odobenus rosmarus',
                'weight' => 1200,
                'alimentation' => 'Carnivore',
                'extintion' => 'Vulnerable',
                'colour' => 'Brown, Gray',
                'habitat' => 'Arctic coastal regions',
                'life_duration' => 40,
            ],
            [
                'name' => 'Wolf',
                'species' => 'Canis lupus',
                'weight' => 40,
                'alimentation' => 'Carnivore',
                'extintion' => 'Least Concern',
                'colour' => 'Gray, White, Black',
                'habitat' => 'Forest, Grassland, Tundra',
                'life_duration' => 13,
            ],
            [
                'name' => 'Zebra',
                'species' => 'Equus quagga',
                'weight' => 380,
                'alimentation' => 'Herbivore',
                'extintion' => 'Near Threatened',
                'colour' => 'Black, White stripes',
                'habitat' => 'Savanna, Grassland',
                'life_duration' => 25,
            ]
    ];

        foreach($animalsData as $animalData){
            $newAnimal = new Animal();
            $newAnimal->name = $animalData['name'];
            $newAnimal->species = $animalData['species'];
            $newAnimal->weight = $animalData['weight'];
            $newAnimal->alimentation = $animalData['alimentation'];
            $newAnimal->extintion = $animalData['extintion'];
            $newAnimal->colour = $animalData['colour'];
            $newAnimal->habitat = $animalData['habitat'];
            $newAnimal->life_duration = $animalData['life_duration'];
            $newAnimal-> save();
        }
    }
}
