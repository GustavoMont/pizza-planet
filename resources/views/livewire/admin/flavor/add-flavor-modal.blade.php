<div class="w-full">
    <button class="btn btn-accent text-white w-full" wire:click="openModal">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>

        Adicionar novo sabor
    </button>
    <dialog class="modal {{ $isModalOpen ? 'modal-open' : '' }} ">
        <div class="modal-box">
            <h3 class="font-bold text-lg text-red-400">Adicionar novo sabor!</h3>
            <div class="modal-action">
                <form wire:submit.prevent='save' class="flex flex-col gap-4 w-full">
                    <div class="flex flex-col gap-1.5">
                        <label for="name">Nome:</label>
                        <div class="flex flex-col gap-0 5">
                            <x-form.text-input wire:model='form.name' id="form.name" />
                            @error('form.name')
                                <span class="text-error"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label for="value">Valor:</label>
                        <x-form.text-input type="number" wire:model='form.value' id="value" />
                        <div class="flex flex-col gap-0 5">
                            @error('form.value')
                                <span class="text-error"><small>{{ $message }}</small></span>
                            @enderror
                        </div>

                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label for="preparation_time">Tempo de Preparação (minutos):</label>
                        <x-form.text-input wire:model='form.preparation_time' id="preparation_time" type="number" />
                        <div class="flex flex-col gap-0 5">
                            @error('form.preparation_time')
                                <span class="text-error"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label for="ingredients">Ingredientes:</label>
                        <textarea wire:model='form.ingredients' id="ingredients"
                            class="rounded-md border-orange-400 focus:ring-1 focus:ring-orange-500 focus:ring-opacity-50
                        focus:border-orange-300"
                            placeholder="calabresa, azeitona, molho pomodoro"></textarea>
                        <div class="flex flex-col gap-0 5">
                            @error('form.ingredients')
                                <span class="text-error"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="reset" class="btn w-1/2" wire:click="closeModal">Cancelar</button>
                        <button type="submit" class="btn btn-accent text-white w-1/2">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
</div>
