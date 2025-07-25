<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use Carbon;

class RegistrationComponent extends Component
{
    public function render()
    {
        return view('livewire.registration-component');
    }

    
    public $id_card = '';
    public $code = '';
    public function save(StoreRegistrationRequest $request)
    {
        $student = Student::find($request->id_card);
        $subject = Subject::find($request->code);
        $data = Registration::create([
            'student_id' => $student->id,
            'subject_id' => $subject->id,
            'registration_date' => Carbon::now()->format('Y-m-d')
        ]);
        session()->flash('status', 'Se ha matrículado satisfactoriamente');
        return $this->redirect('/dashboard');
    }
}
