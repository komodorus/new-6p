<?php

namespace App;

use App\Project;

class Images extends Model
{

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
