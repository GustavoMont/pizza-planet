<div>
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
            <a type="reset" href="/cardapio" class="btn w-1/2" wire:navigate>Cancelar</a>
            <button type="submit" class="btn btn-accent text-white w-1/2">Confirmar</button>
        </div>
    </form>
</div>
