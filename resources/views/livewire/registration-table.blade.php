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
            @forelse ($this->query()->get() as $registro)
                <tr>
                    <td class="border px-4 py-2">{{ $registro->student->completed_name }}</td>
                    <td class="border px-4 py-2">{{ $registro->subject->subject_name }}</td>
                    <td class="border px-4 py-2">{{ $registro->registration_date }}</td>
                    <td class="border px-4 py-2">Eliminar</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center text-gray-500">
                        No se ha encontrado ningún registro
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
