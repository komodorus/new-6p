<?php

namespace App;

class Solucao extends Model
{
    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
