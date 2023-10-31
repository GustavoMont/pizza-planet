<li class="card w-96 grow-0 bg-base-100 shadow-xl">
    <figure>
        <img src="{{ asset('images/pizza_' . $flavor->id % 3 + 1 . '.jpg') }}" alt="Shoes" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">
            {{ $flavor->name }}
            <div class="badge badge-secondary">R${{ $flavor->value }}</div>
        </h2>
        <p>{{ $flavor->ingredients }} </p>
        <div class="flex gap-2 mt-1">
            <button wire:click='openModal()' class="w-full btn btn-error shrink">Deletar</button>
            <a class="btn-accent btn w-full shrink" wire:navigate href="/sabores/{{ $flavor->id }}/editar">Editar</a>
        </div>
    </div>
    <dialog class="modal {{ $isModalOpen ? 'modal-open' : '' }} ">

        <div class="modal-box flex flex-col gap-5">
            <button wire:click='closeModal()' class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

            <h4 class="text-warning">Tem certeza que deseja deletar o sabor {{ $flavor->name }}?</h4>
            <p>Essa ação não poderá ser desfeita!!!</p>
            <div class="flex gap-2 mt-1">
                <button wire:click='closeModal()' class="btn w-full shrink">Cancelar</button>
                <button wire:click='delete()' class="btn btn-warning w-full shrink">Confirmar</button>
            </div>
        </div>
    </dialog>
</li>
