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
        Student::create([
            'completed_name' => 'Fatima Siliezar',
            'id_card' => 'SM0002',
            'date_of_birth' => '1995-11-06',
        ]);
        Student::create([
            'completed_name' => 'Helen Gonzalez',
            'id_card' => 'GM0001',
            'date_of_birth' => '2005-02-19',
        ]);
    }
}
