<div class="p-6 w-full">
    <div class="flex flex-col lg:flex-row gap-6 w-full">
        
        <div class="lg:basis-[35%] bg-white p-6 rounded-lg">
            <h2 class="text-2xl mb-4">Nuevo registro de matrícula</h2>
            <form wire:submit.prevent="save">
                <div>
                    <x-label for="id_card" value="Carnet de estudiante" />
                    <x-input wire:model="id_card" id="id_card" class="block mt-1 w-full" type="text" name="id_card" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="code" value="Código de materia" />
                    <x-input wire:model="code" class="block mt-1 w-full" type="text" name="code" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4">
                        Matrícular
                    </x-button>
                </div>
            </form>
        </div>

        <div class="lg:basis-[65%] bg-white p-6 rounded-lg">
            <h2 class="text-2xl mb-4">Listado de matrículas</h2>
            @livewire('registration-table')
        </div>

    </div>
</div>
