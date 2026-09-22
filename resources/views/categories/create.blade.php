<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Nova categoria</h1>
        <p class="text-base-content/70 mt-1">Adicione uma nova categoria ao cardápio de {{ $restaurant->restaurant_name }}.</p>
    </div>

    <a href="{{ route('panel', $restaurant) }}" class="btn btn-ghost btn-sm mb-4">
        <x-heroicon-o-arrow-left class="w-5 h-5"/> Voltar
    </a>

    <form action="/restaurant/{{ $restaurant->slug }}/categories" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Dados da categoria</legend>

            <label class="label" for="name">Nome da categoria</label>
            <input type="text" id="name" name="name" class="input"
                   placeholder="Entradas, Pratos Principais, Bebidas..."/>
            <x-forms.error name="name"/>

            <label class="label" for="sort_order">Ordem</label>
            <input type="text" id="sort_order" name="sort_order" class="input"
                   placeholder="Ordem de exibição: 1, 2..."/>

            <button class="btn btn-primary mt-4">
                Cadastrar categoria
            </button>
        </fieldset>
    </form>
</x-layout>
