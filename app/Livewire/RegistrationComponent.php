<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;
use Rappasoft\LaravelLivewireTables\Views\Column;

class RegistrationComponent extends Component
{
    public $id_card = '';
    public $code = '';

    public function render()
    {
        return view('livewire.registration-component');
    }
    
    public function save()
    {
        $this->validateData();
        $student = Student::where('id_card', $this->id_card)->first();
        $subject = Subject::where('code', $this->code)->first();
        if (!$student || !$subject) {
            session()->flash('error', 'Estudiante o materia no encontrada');
            return;
        }
        Registration::create([
            'student_id' => $student->id,
            'subject_id' => $subject->id,
            'registration_date' => Carbon::now()->format('Y-m-d')
        ]); 
        session()->flash('status', 'Se ha matrículado satisfactoriamente');
        return $this->redirect('/dashboard');
    }


    public function validateData(){

        return $this->validate([
            'id_card' => ['required'],
            'code' => ['required'],
        ]);
    }

    
}
