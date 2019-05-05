<?php

namespace App;

use App\Probeuse;
use App\Measurement;
use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    public function probeuse()
    {
        return $this->belongsToMany(Probeuse::class);
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }
}
