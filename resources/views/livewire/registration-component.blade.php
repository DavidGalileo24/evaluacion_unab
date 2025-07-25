<div>
    <div class="p-6 flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
            <h2 class="text-2xl">Nuevo registro de matrícula</h2><br>    
            <form wire:submit="save">
                    @csrf
                    <div>
                        <x-label for="id_card" value="Carnet de estudiante" />
                        <x-input wire:model="id_card" id="id_card" class="block mt-1 w-full" type="text" name="id_card" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="Código de materia" />
                        <x-input wire:model="code" class="block mt-1 w-full" type="text" name="code" required />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ms-4">
                            Matrícular
                        </x-button>
                    </div>
                </form>
            </div>
        </main>
    </div>


    <div class="p-6 flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h2 class="text-2xl">Listado de matrículas</h2><br>    

            </div>
        </main>
    </div>
</div>