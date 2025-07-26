<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject_name', 'code'
    ];

    public function students(){
        return $this->belongsToMany(Student::class)->using(Registration::class);
    }
}
