<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Painel — {{ $restaurant->restaurant_name }}</h1>
        <p class="text-base-content/70 mt-1">Gerencie o cardápio e as categorias do seu restaurante.</p>
    </div>

    <div class="flex flex-wrap gap-4">
        <div class="card w-96 bg-base-300 card-sm border border-primary/40 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">
                    <x-heroicon-o-book-open class="w-5 h-5 text-primary"/>
                    Cardápio
                </h2>
                <p>Gerencie os produtos disponíveis no seu cardápio, incluindo preços, descrições e informações dos
                    itens.</p>
                <div class="justify-end card-actions">
                    <a href="{{ route('categories.create', $restaurant) }}" class="btn btn-sm btn-primary">
                        <x-heroicon-o-plus class="w-5 h-5"/>
                        Adicionar Produto
                    </a>
                </div>
            </div>
        </div>

        <div class="card w-96 bg-base-300 card-sm border border-primary/40 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">
                    <x-heroicon-o-tag class="w-5 h-5 text-primary"/>
                    Categorias
                </h2>
                <p>Organize os produtos do seu cardápio em categorias para facilitar a navegação e o gerenciamento</p>
                <div class="justify-end card-actions">
                    <a href="{{ route('categories.create', $restaurant) }}" class="btn btn-sm btn-primary">
                        <x-heroicon-o-plus class="w-5 h-5"/>
                        Adicionar Categoria
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
