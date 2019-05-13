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
        return $this->belongsTo(Probe::class);
    }

    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
