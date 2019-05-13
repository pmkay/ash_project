<?php

namespace App;

use App\Probe;
use Illuminate\Database\Eloquent\Model;

class Probeuse extends Model
{
    public function probe()
    {
        return $this->belongsTo(Probe::class);
    }
}
