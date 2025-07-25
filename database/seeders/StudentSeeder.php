<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'completed_name' => 'Galileo Mejía',
            'id_card' => 'SM0001',
            'date_of_birth' => '1997-03-24',
        ]);
    }
}
