<?php

use Faker\Generator as Faker;
use App\Tratte;
use App\Compagnia;
use App\Aereoporto;
use Illuminate\Database\Seeder;

class TratteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $aereoportos_id =  Aereoporto::pluck("id")->toArray();
        $compagnias_id = Compagnia::pluck("id")->toArray();

        for($i=0; $i < 10; $i++){
            $newTratta = new Tratte();
            $newTratta->orario_partenza = $faker->time('Y-m-d H:i:s');
            $newTratta->orario_arrivo = $faker->time('Y-m-d H:i:s');
            $newTratta->Aereoporto_partenza = $aereoportos_id[rand(0, count($aereoportos_id)-1)];
            $newTratta->Aereoporto_arrivo = $aereoportos_id[rand(0, count($aereoportos_id)-1)];
            $newTratta->Compagnia = $compagnias_id[rand(0, count($compagnias_id)-1)];
            $newTratta->save();
        }
    }
}
