<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Configurações — {{ $restaurant->restaurant_name }}</h1>
        <p class="text-base-content/70 mt-1">Edite os dados do seu restaurante.</p>
    </div>

    <form action="/restaurant/{{ $restaurant->slug }}" method="POST">
        @csrf
        @method('PATCH')

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-md border p-6 mx-auto shadow-sm mb-6">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Dados do restaurante</legend>

            <div class="flex items-center gap-4 mb-4">
                <img src="{{ $restaurant->logo_url }}" alt="{{ $restaurant->restaurant_name }}"
                     class="h-16 w-16 rounded-full border border-primary/40 object-cover"/>
                <div class="flex-1">
                    <label class="label">URL do logo</label>
                    <input type="text" name="logo_url" class="input w-full" value="{{ $restaurant->logo_url }}">
                </div>
            </div>

            <label class="label">Nome do restaurante</label>
            <input type="text" name="restaurant_name" class="input w-full" value="{{ $restaurant->restaurant_name }}">

            <label class="label">Descrição</label>
            <textarea name="description" rows="3" class="textarea w-full">{{ $restaurant->description }}</textarea>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex flex-col w-full">
                    <label class="label">Telefone</label>
                    <input type="text" name="phone" class="input w-full" value="{{ $restaurant->phone }}">
                </div>
                <div class="flex flex-col w-full">
                    <label class="label">Whatsapp</label>
                    <input type="text" name="whatsapp" class="input w-full" value="{{ $restaurant->whatsapp }}">
                </div>
                <div class="flex flex-col w-full">
                    <label class="label">Slug</label>
                    <input type="text" name="slug" class="input w-full" value="{{ $restaurant->slug }}">
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <button onclick="modal_delete.showModal()" type="button" class="btn btn-error btn-outline btn-sm">
                    <x-heroicon-s-trash class="w-4 h-4"/>
                    Excluir
                </button>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </fieldset>
    </form>

    <dialog id="modal_delete" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Tem certeza?</h3>
            <p class="py-4">Você está prestes a excluir <b>{{ $restaurant->restaurant_name }}</b>.</p>
            <form method="POST" action="/restaurant/{{ $restaurant->slug }}">
                @csrf
                @method('DELETE')
                <div class="modal-action">
                    <button type="button" class="btn" onclick="modal_delete.close()">Cancelar</button>
                    <button type="submit" class="btn btn-error">Excluir</button>
                </div>
            </form>
        </div>
    </dialog>
</x-layout>
