<?php

namespace App;

class Segmento extends Model
{
    public function clients(){
        return $this->belongsToMany(Client::class);
    }
}
