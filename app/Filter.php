<?php

namespace App;

use App\Provider;
use App\Measurement;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    public function provider()
    {
        return $this->hasMany(Provider::class);
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }
}
