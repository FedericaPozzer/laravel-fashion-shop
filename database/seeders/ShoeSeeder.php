<?php

namespace Database\Seeders;

use App\Models\Shoe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 40; $i++) {

        $new_shoe = new Shoe;

        $new_shoe->marca = $faker->word();
        $new_shoe->modello = $faker->word();
        $new_shoe->prezzo = $faker->randomFloat(2);
        $new_shoe->descrizione = $faker->paragraph();
        $new_shoe->immagine = "https://picsum.photos/400/400";

        $new_shoe->save();
        };
    }
}
