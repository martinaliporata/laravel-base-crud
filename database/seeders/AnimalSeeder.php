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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/African_Bush_Elephant.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Bald_Eagle_Portrait.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/36/Bengal_tiger_India.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Blue_Whale_1.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/76/Chimpanzee-01.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/55/Emperor_penguin_manchot_empereur.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Grosser_Panda.JPG'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Golden_eagle_in_flight_-_5.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/White_shark.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Harpy_Eagle.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/03/Hippopotamus_in_Samburu.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/Jaguar.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2c/King_Cobra.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Koala_climbing_tree.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Leopard_africa.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Mountain_Gorilla.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/77/Narwhals_breach.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/76/Orangutan.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Polar_Bear_-_Alaska.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Red_Panda_-_Cincinnati_Zoo.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/Uncia_uncia.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/68/Tasdevil_large.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Walrus_Vliegkamp.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/05/Canis_lupus_laying_in_grass.jpg'
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
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Grants_zebra.jpg'
        ]
    ];

        foreach($animalsData as $animalData){
            $newAnimal = new Animal($animalData);
            // $newAnimal->name = $animalData['name'];
            // $newAnimal->species = $animalData['species'];
            // $newAnimal->weight = $animalData['weight'];
            // $newAnimal->alimentation = $animalData['alimentation'];
            // $newAnimal->extintion = $animalData['extintion'];
            // $newAnimal->colour = $animalData['colour'];
            // $newAnimal->habitat = $animalData['habitat'];
            // $newAnimal->life_duration = $animalData['life_duration'];
            $newAnimal-> save();
        }
    }
}
