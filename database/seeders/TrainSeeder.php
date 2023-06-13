<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i=0; $i<100; $i++ ){
            $train = new Train();

            $train->azienda = $faker->company() ;
            $train->stazione_di_partenza = $faker->randomElement(['torino', 'milano', 'roma' ]);
            $train->stazione_di_arrivo = $faker->randomElement(['venezia', 'napoli', 'genova' ]);
            $train->orario_di_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->orario_di_arrivo = $faker->dateTimeBetween('-1 day', '+2 day');
            $train->codice_treno = 'SC'.$faker->randomDigit();
            $train->carrozze = $faker->randomDigit();
            $train->on_time = $faker->boolean(90);
            $train->cancellato = $faker->boolean(20);

            $train->save();
        }
    }
}
