<x-layout>
    <div class="mb-6">
        <h1 class="font-display text-3xl font-semibold">Bem-vindo de volta, {{ auth()->user()->name }}!</h1>
        <p class="text-base-content/70 mt-1">Gerencie seus restaurantes ou cadastre um novo abaixo.</p>
    </div>

    <div class="flex flex-wrap gap-4 mb-10">
        <div class="card bg-base-300 h-64 w-full sm:w-96 shadow-sm">
            <figure>
                <img src="https://plus.unsplash.com/premium_photo-1661883237884-263e8de8869b?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cmVzdGF1cmFudGVzfGVufDB8fDB8fHww"
                    alt="Criar restaurante" class="h-32 w-full object-cover" />
            </figure>
            <div class="card-body">
                <h2 class="card-title font-display">Criar restaurante</h2>
                <p>Cadastre um novo restaurante definindo nome, contato e descrição.</p>
                <div class="card-actions justify-end">
                    <form action="/restaurant" method="GET">
                        <button type="submit" class="btn btn-primary">Criar agora +</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2 class="font-display text-xl font-semibold mb-3">Seus restaurantes</h2>
    <div class="flex flex-wrap gap-4">
        @forelse ($restaurants as $restaurant)
            <x-restaurant-card :restaurant="$restaurant" />
        @empty
            <p class="text-base-content/60">Você ainda não tem nenhum restaurante cadastrado.</p>
        @endforelse
    </div>
</x-layout>
