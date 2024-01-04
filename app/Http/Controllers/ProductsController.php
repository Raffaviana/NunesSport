<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view ('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Products::create(['name'=>$input['name'], 
                        'cod'=>$input['cod'], 
                        'desc'=>$input['desc'], 
                        'price'=>$input['price']]);
        return redirect('products')->with('flash_message', 'Produto Adicionado!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Products::find($id);
        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Products::find($id);
        $input = $request->all();
        $products->update($input);
        return redirect('products')->with('flash_message', 'Produto Atualizado!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('products')->with('flash_message', 'Produto Excluido!');
    }
}
