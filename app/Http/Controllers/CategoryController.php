<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //

    public function index()
    {

        $categories=Category::all();
        return view('categories.index', compact('categories'));

    }

    public function create()
    {
        return view('categories.create');
    }

    // Guardar una nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Categoría creada con éxito.');
    }

    // Mostrar formulario de edición
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Actualizar una categoría existente
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada con éxito.');
    }

    // Eliminar una categoría
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Categoría eliminada con éxito.');
    }



}
