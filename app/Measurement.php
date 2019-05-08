<?php

namespace App;

use App\User;
use App\Probe;
use App\Filter;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $casts = [
        'date' => 'date'
    ];
    public function probe()
    {
        return $this->hasMany(Probe::class);
    }

    public function filter()
    {
        return $this->hasMany(Filter::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
