<?php


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
    public function run()
    {
        $aereoportos_id =  Aereoporto::pluck("id");
        $compagnias_id = Compagnia::pluck("id");

        for($i=0; $i < 10; $i++){
            $newTratta = new Tratte();
            $newTratta->Aereoporto_partenza = $aereoportos_id[rand(0, count($aereoportos_id)-1)];
            $newTratta->Aereoporto_arrivo = $aereoportos_id[rand(0, count($aereoportos_id)-1)];
            $newTratta->Compagnia = $compagnias_id[rand(0, count($compagnias_id)-1)];
            $newTratta->save();
        }
    }
}
