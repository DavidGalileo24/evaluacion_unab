<div>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Estudiante</th>
                <th class="border px-4 py-2">Asignatura</th>
                <th class="border px-4 py-2">Fecha de matrícula</th>
                <th class="border px-4 py-2">Acciones</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($this->query()->get() as $registro)
                <tr>
                    <td class="border px-4 py-2">{{ $registro->student->completed_name }}</td>
                    <td class="border px-4 py-2">{{ $registro->subject->subject_name }}</td>
                    <td class="border px-4 py-2">{{ $registro->registration_date }}</td>
                    <td class="border px-4 py-2">Eliminar</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
