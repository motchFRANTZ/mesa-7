<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Categorias</h1>
        <p class="text-base-content/70 mt-1">Organize o cardápio de {{ $restaurant->restaurant_name }} em categorias.</p>
    </div>

    <div class="mb-4 flex items-center justify-between">
        <a href="{{ route('panel', $restaurant) }}" class="btn btn-ghost btn-sm">
            <x-heroicon-o-arrow-left class="w-5 h-5"/> Voltar
        </a>

        <a href="{{ route('categories.create', $restaurant) }}" class="btn btn-primary btn-sm">
            <x-heroicon-o-plus class="w-5 h-5"/> Nova categoria
        </a>
    </div>

    <div class="overflow-x-auto bg-base-200 border border-base-300 rounded-box shadow-sm">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Ordem</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <th class="text-center">{{ $category->id }}</th>
                        <td class="text-center">{{ $category->name }}</td>
                        <td class="text-center">{{ $category->sort_order ?? '—' }}</td>
                        <td class="text-center">
                            <div class="flex justify-center gap-2">
                                <a class="btn btn-sm btn-primary"
                                   href="{{ route('categories.edit', [$restaurant, $category]) }}">
                                    <x-heroicon-s-pencil-square class="w-4 h-4"/>
                                </a>
                                <button type="button" class="btn btn-sm btn-error"
                                        onclick="modal_delete_{{ $category->id }}.showModal()">
                                    <x-heroicon-s-trash class="w-4 h-4"/>
                                </button>
                            </div>

                            <dialog id="modal_delete_{{ $category->id }}" class="modal">
                                <div class="modal-box text-left">
                                    <h3 class="text-lg font-bold">Tem certeza?</h3>
                                    <p class="py-4">Você está prestes a excluir a categoria <b>{{ $category->name }}</b>.</p>
                                    <form method="POST"
                                          action="{{ route('categories.destroy', [$restaurant, $category]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-action">
                                            <button type="button" class="btn"
                                                    onclick="modal_delete_{{ $category->id }}.close()">Cancelar
                                            </button>
                                            <button type="submit" class="btn btn-error">Excluir</button>
                                        </div>
                                    </form>
                                </div>
                            </dialog>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-base-content/60">Nenhuma categoria cadastrada ainda.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
