<?php

namespace App;

use App\Provider;
use App\Measurement;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function measurement()
    {
        return $this->hasMany(Measurement::class);
    }
}
