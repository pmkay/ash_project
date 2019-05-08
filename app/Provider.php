<?php

namespace App;

use App\Filter;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
