<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'subject_name' => 'Sistemas Operativos',
            'code' => 'SIS-OP',
        ]);
        Subject::create([
            'subject_name' => 'Bases de datos 1',
            'code' => 'BAS-DAT-UNO',
        ]);
        Subject::create([
            'subject_name' => 'Contabilidad 1',
            'code' => 'CONT-UNO',
        ]);
    }
}
