<?php

namespace App\Livewire;

use App\Models\Registration;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\Views\Column;

class RegistrationTable extends Component
{
    
    protected $model = Registration::class;

    
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function render()
    {
        return view('livewire.registration-table');
    }


    public function query()
    {
        return Registration::query()->with(['student', 'subject']);
    }

    public function columns(): array
    {
        return [
            Column::make('Estudiante')->format(fn($value, $row) => $row->students->completed_name),
            Column::make('Asignatura')->format(fn($value, $row) => $row->subjects->subject_name),
            Column::make('Fecha de matrícula', 'registration_date'),
        ];
    }
}
