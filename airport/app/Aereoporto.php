<?php

namespace App;

use App;
use Illuminate\Database\Eloquent\Model;

class Aereoporto extends Model
{

    public function compagnias(){
        return $this->belongsToMany('App\Model\Aereoporto')->withPivot("orario_partenza","orario_arrivo","prezzo_del_volo");
    }
}
