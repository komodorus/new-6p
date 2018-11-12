<?php

namespace App;

class Client extends Model
{
    
    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function segmentos(){
        return $this->hasMany(Segmento::class);
    }
}
