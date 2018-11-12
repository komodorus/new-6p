<?php

namespace App;

class Prize extends Model
{
    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
