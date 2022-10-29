<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratte extends Model
{

    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        "Aereoporto_partenza",
        "Aereoporto_arrivo",
        "Compagnia"
    ];

    public function aereoportoPartenza(){
        return $this->belongsTo("App\Aereoporto", "Aereoporto_partenza");
    }

    public function aereoportoArrivo(){
        return $this->belongsTo("App\Aereoporto", "Aereoporto_arrivo");
    }

    public function compagnia(){
        return $this->belongsTo("App\Compagnia", "Compagnia");
    }

}
