<?php

namespace App;

use App;
use Illuminate\Database\Eloquent\Model;

class Compagnia extends Model
{

    public function aereoportos(){
        return $this->belongsToMany("App\Aereoporto")->withPivot("orario_partenza","orario_arrivo","prezzo_del_volo");
    }
}
