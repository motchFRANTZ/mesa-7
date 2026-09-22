<?php

namespace App\Http\Middleware;

use App\Models\Restaurant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ResolveRestaurant
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $restaurant = $request->route('restaurant');

        if (! $restaurant instanceof Restaurant) {
            $restaurant = Restaurant::where('slug', $restaurant)->firstOrFail();
        }

        Gate::authorize('view', $restaurant);

        app()->instance(Restaurant::class, $restaurant);

        return $next($request);
    }
}
