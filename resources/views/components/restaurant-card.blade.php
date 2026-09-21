@props(['restaurant'])

<div class="card card-side bg-base-100 border border-primary/40 h-50 w-full sm:w-96 shadow-sm">
    <div class="card-figure self-center">
        <figure class="w-32 h-32 rounded-full p-4">
            <img src="{{ $restaurant->logo_url }}" alt="{{ $restaurant->restaurant_name }}" class="rounded-full aspect-square object-cover mx-auto" />
        </figure>
    </div>
    <div class="card-body">
        <div class="badge badge-primary badge-outline">Seu restaurante</div>
        <h2 class="card-title font-display">
            {{ $restaurant->restaurant_name }}
        </h2>
        <p class="line-clamp-2 text-base-content/80">{{ $restaurant->description }}</p>
        <div class="card-actions justify-end">
            <a href="/restaurant/{{ $restaurant->slug }}" class="btn btn-primary btn-sm">Ver restaurante</a>
        </div>
    </div>
</div>
