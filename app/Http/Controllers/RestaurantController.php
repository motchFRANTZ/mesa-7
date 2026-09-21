<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate as FacadesGate;

class RestaurantController extends Controller
{
    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'restaurant_name' => 'required',
            'slug' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'logo_url' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->restaurant()->create($validated);

        return redirect('/homepage');
    }

    public function edit(Restaurant $restaurant)
    {
        FacadesGate::authorize('update', $restaurant);
        return view('restaurant.show', [
            'restaurant' => $restaurant,
        ]);
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        FacadesGate::authorize('update', $restaurant);
        $validated = $request->validate([
            'restaurant_name' => 'required',
            'slug' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'logo_url' => 'required',
            'description' => 'required',
        ]);

        $restaurant->update($validated);

        return redirect('/homepage');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect('/homepage');
    }
}
