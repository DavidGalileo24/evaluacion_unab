<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Registration extends Pivot
{
    protected $table = 'registrations';
    
    protected $fillable = [
        'student_id', 'subject_id', 'registration_date'
    ];
}
