<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $suppliers = Supplier::all();

        //Probando la tabla pivote con el primer producto (Catan)
        $first_product = Product::find(1);
        $first_supplier = Supplier::find(1);

        //return view('home', compact('products'));
        return view('home')
            ->with('products', $products)
            ->with('suppliers', $suppliers)
            ->with('first_product', $first_product)
            ->with('first_supplier', $first_supplier);
    }

    //Muestra vista con lista de productos
    public function list()
    {
        $products = Product::all();
        return view('product-list', compact('products'));
    }

    //Muestra vista de creación de producto
    public function create()
    {
        return view('product-create');
    }

    //Registra producto nuevo y redirige a la lista de productos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:products,code|max:17',
            'cost' => 'required|numeric',
            'iva' => 'required|integer',
            'stock' => 'required|integer'
        ]);

        Product::create($request->all());
        return redirect()->route('product.list');
    }

    //Muestra la página de edición de un producto
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product-edit', compact('product'));
    }

    //registra los nuevos cambios de producto
    //y redirige a la vista de lista de productos
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:products,code,'. $id .'|max:17',//$i especifica que debe ignorarse a sí mismo en la regla de unique
            'cost' => 'required|numeric',
            'iva' => 'required|integer',
            'stock' => 'required|integer'
        ]);

        $product->name = $request->name;
        $product->code = $request->code;//debe poder admitir su propio código
        $product->cost = $request->cost;
        $product->iva = $request->iva;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->save();

        return redirect()->route('product.list');
    }

    //elimina un producto
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.list');
    }
}
