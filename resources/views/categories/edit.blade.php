<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Editar categoria</h1>
        <p class="text-base-content/70 mt-1">Atualize os dados desta categoria de {{ $restaurant->restaurant_name }}.</p>
    </div>

    <a href="{{ route('panel', $restaurant) }}" class="btn btn-ghost btn-sm mb-4">
        <x-heroicon-o-arrow-left class="w-5 h-5"/> Voltar
    </a>

    <form action="/restaurant/{{ $restaurant->slug }}/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PATCH')

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Dados da categoria</legend>

            <div class="flex justify-end">
                <button onclick="modal_delete.showModal()" type="button" class="btn btn-error btn-outline btn-sm">
                    <x-heroicon-s-trash class="w-4 h-4"/>
                </button>
            </div>

            <label class="label" for="name">Nome da categoria</label>
            <input type="text" id="name" name="name" class="input"
                   placeholder="Entradas, Pratos Principais, Bebidas..." value="{{ $category->name }}"/>
            <x-forms.error name="name"/>

            <label class="label" for="sort_order">Ordem</label>
            <input type="text" id="sort_order" name="sort_order" class="input"
                   placeholder="Ordem de exibição: 1, 2..." value="{{ $category->sort_order }}"/>

            <button class="btn btn-primary mt-4">
                Atualizar categoria
            </button>
        </fieldset>
    </form>

    <dialog id="modal_delete" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Tem certeza?</h3>
            <p class="py-4">Você está prestes a excluir a categoria <b>{{ $category->name }}</b>.</p>
            <form method="POST" action="/restaurant/{{ $restaurant->slug }}/categories/{{ $category->id }}">
                @csrf
                @method('DELETE')
                <div class="modal-action">
                    <button type="button" class="btn">Cancelar</button>
                    <button type="submit" class="btn btn-error">Excluir</button>
                </div>
            </form>
        </div>
    </dialog>
</x-layout>
