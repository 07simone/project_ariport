<?php

use App\Compagnia;
use Illuminate\Database\Seeder;

class CompagniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compagnias = ["Ryanair", "Alitalia","Lufthansa", "AirFrance","British Airways"];
        for($i=0; $i < count($compagnias); $i++){

            $newCompagnia = new Compagnia();
            $newCompagnia->Nome_compagnia = $compagnias[$i];
            $newCompagnia->save();
        }
    }
}
