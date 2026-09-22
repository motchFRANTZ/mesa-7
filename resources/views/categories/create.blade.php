<x-layout>
    <form action="/restaurant/{{ $restaurant->slug }}/categories" method="POST">
        @csrf
        <a href="/homepage" class="btn btn-error">
            <x-heroicon-o-arrow-left class="w-5 h-5"/> Voltar
        </a>
        <fieldset class="fieldset w-xs mx-auto">

            <h3 class="mb-4">Nova Categoria</h3>

            <label class="label" for="name">Nome da Categoria: </label>
            <input type="text" id="name" name="name" class="input"
                   placeholder="Entradas, Pratos Principais, Bebidas..."/>
            <x-forms.error name="name"/>

            <label class="label" for="sort_order">Ordem:</label>
            <input type="text" id="sort_order" name="sort_order" class="input" placeholder="Ordem de exibição: 1,2..."/>

            <button class="btn btn-primary mt-4">
                Cadastrar Nova Categoria
            </button>
        </fieldset>

    </form>
</x-layout>
