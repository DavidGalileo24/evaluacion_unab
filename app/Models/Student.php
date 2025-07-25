<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'completed_name', 'id_card', 'date_of_birth'
    ];

    
    public function registrations(){
        return $this->belongsToMany(Subject::class, 'registration_date');
    }

}
