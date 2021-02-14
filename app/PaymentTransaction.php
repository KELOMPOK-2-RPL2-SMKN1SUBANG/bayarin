<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class PaymentTransaction extends Model
{
    protected $guarded = ['id'];

    public function account_number()
    {
        return $this->belongsTo(Student::class, 'account_number');
    }
}
