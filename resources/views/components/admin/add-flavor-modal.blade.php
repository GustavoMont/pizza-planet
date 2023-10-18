<button class="btn btn-accent text-white" onclick="add_flavor.showModal()">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>

    Adicionar novo sabor
</button>
<dialog id="add_flavor" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg text-red-400">Adicionar novo sabor!</h3>
        <div class="modal-action">
            <form method="dialog" wire:submit.prevent='save' class="flex flex-col gap-4 w-full">
                <div class="flex flex-col gap-1.5">
                    <label for="name">Nome:</label>
                    <x-form.text-input required="true" wire:model='name' id="name" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="value">Valor:</label>
                    <x-form.text-input required="true" wire:model='value' id="value" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="preparation_time">Tempo de Preparação (minutos):</label>
                    <x-form.text-input required="true" wire:model='preparation_time' id="preparation_time"
                        type="number" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="ingredients">Ingredientes:</label>
                    <textarea @required(true) wire:model='ingredients' id="ingredients"
                        class="rounded-md border-orange-400 focus:ring-1 focus:ring-orange-500 focus:ring-opacity-50
                    focus:border-orange-300"
                        placeholder="calabresa, azeitona, molho pomodoro"></textarea>
                </div>
                <div class="flex gap-2">
                    <button type="reset" class="btn w-1/2">Cancelar</button>
                    <button type="submit" class="btn btn-accent text-white w-1/2">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</dialog>
