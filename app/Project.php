<?php

namespace App;

class Project extends Model
{   
    public function scopeCover(){
        return $this->images->where('cover', true)->first();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function prizes(){
        return $this->hasMany(Prize::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function segmentos(){
        return $this->hasManyThrough(Client::class, Segmento::class);
    }

    public function solucoes(){
        return $this->belongsToMany(Solucao::class);
    }
}