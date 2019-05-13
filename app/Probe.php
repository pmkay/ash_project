<?php

namespace App;

use App\Probeuse;
use App\Measurement;
use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    public function probeuse()
    {
        return $this->hasMany(Probeuse::class);
    }

    public function measurement()
    {
        return $this->hasMany(Measurement::class);
    }
}
