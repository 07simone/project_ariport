<?php

use App\Aereoporto;
use Illuminate\Database\Seeder;

class AereoportoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aereoportos = ["Roma", "Milano","Napoli", "Palermo","Bologna"];
        for($i=0; $i < count($aereoportos); $i++){

            $newAereoporto = new Aereoporto();
            $newAereoporto->Nome_aereoporto = $aereoportos[$i];
            $newAereoporto->save();
        }
    }
}
