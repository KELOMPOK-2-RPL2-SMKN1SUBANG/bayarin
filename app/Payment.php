<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classroom;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'classroom');
    }
}
