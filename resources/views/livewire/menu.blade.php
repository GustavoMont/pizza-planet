<section class="flex flex-col gap-4">

    <h2 class="text-4xl m-0 text-red-500">Pizzas</h2>
    <div class="flex flex-col gap-10">
        <div class="flex justify-center items-center gap-2 self-start">
            <x-form.text-input wire:model.live='search' />
            <x-common.loading wire:loading />
            <x-admin.add-flavor-modal />
        </div>
        <ul class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
            @forelse ($flavors as $flavor)
                <li class="card w-96 grow-0 bg-base-100 shadow-xl">
                    <figure>
                        <img src="{{ asset('images/pizza_' . $loop->index % 3 + 1 . '.jpg') }}" alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ $flavor->name }}
                            <div class="badge badge-secondary">R${{ $flavor->value }}</div>

                        </h2>
                        <p>{{ $flavor->ingredients }} </p>
                    </div>
                </li>
            @empty
                <p>Nenhum sabor encontrado</p>
            @endforelse
        </ul>

    </div>
</section>
