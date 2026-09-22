<x-layout>
    <form action="/restaurant/{{ $restaurant->slug }}/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PATCH')

        <a href="/homepage" class="btn btn-error">
            <x-heroicon-o-arrow-left class="w-5 h-5"/>
            Voltar
        </a>
        <fieldset class="fieldset w-xs mx-auto">
            <div class="flex items-center justify-between">
                <h3 class="mb-4">Nova Categoria</h3>

                <div class="flex items-center justify-center gap-x-6 h-10 mt-4">
                    <button onclick="modal_delete.showModal()" type="button" class="btn btn-error">
                        <x-heroicon-s-trash class="text-white w-5 h-5" />
                    </button>
                </div>
            </div>


            <label class="label" for="name">Nome da Categoria: </label>
            <input type="text" id="name" name="name" class="input"
                   placeholder="Entradas, Pratos Principais, Bebidas..." value="{{ $category->name }}"/>
            <x-forms.error name="name"/>

            <label class="label" for="sort_order">Ordem:</label>
            <input type="text" id="sort_order" name="sort_order" class="input" placeholder="Ordem de exibição: 1,2..."
                   value="{{ $category->sort_order }}"/>

            <button class="btn btn-primary mt-4">
                Atualizar Categoria
            </button>


        </fieldset>
    </form>

    <dialog id="modal_delete" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <p class="py-4">You are about to delete the category <b>{{ $category->name }}</b></p>
            <form method="POST" action="/restaurant/{{ $restaurant->slug }}/categories/{{ $category->id }}">
                @csrf
                @method('DELETE')
                <div class="modal-action">
                    <button type="button" class="btn">Cancel</button>
                    <button type="submit" class="btn btn-error">Delete</button>
                </div>
            </form>
        </div>
    </dialog>
</x-layout>
