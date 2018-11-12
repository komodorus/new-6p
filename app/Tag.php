<?php

namespace App;

class Tag extends Model
{    
    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}