<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', [
            'restaurant' => app(Restaurant::class),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('categories')->where('restaurant_id', app(Restaurant::class)->id)],
            'sort_order' => 'nullable|integer'
        ]);

        Category::create($validated);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant, Category $category)
    {
        return view('categories.edit', [
            'restaurant' => $restaurant,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant, Category $category)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('categories')->where('restaurant_id', app(Restaurant::class)->id)->ignore($category->id)],
            'sort_order' => 'nullable|integer'
        ]);

        $category->update($validated);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant, Category $category)
    {
        $category->delete();
        return redirect('homepage');
    }
}
