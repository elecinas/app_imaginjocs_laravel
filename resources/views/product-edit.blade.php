@extends('layout')
@section('title', 'titulo')
@section('content')
<main class="container">
    <div class="bg-light p-5 mt-5 rounded">
        <h3>Editar producte</h3>
        <form method="POST" action="{{ route('product.update', $product->id) }}" >
            @csrf
            @method('PUT')

            {{-- product name --}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ old('name', $product->name) }}">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product code --}}
            <div class="form-group">
                <label for="code">Codi ISBN</label>
                <input name="code" type="text" class="form-control" id="code" value="{{ old('code', $product->code) }}">
            </div>
            @error('code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product cost --}}
            <div class="form-group">
                <label for="cost">Preu</label>
                <input name="cost" type="text" class="form-control" id="cost" value="{{ old('cost', $product->cost) }}">
            </div>
            @error('cost')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product iva --}}
            <div class="form-group">
                <label for="iva">IVA</label>
                <input name="iva" type="text" class="form-control" id="iva" value="{{ old('iva', $product->iva) }}">
            </div>
            @error('iva')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product stock --}}
            <div class="form-group">
                <label for="stock">Quantitat en stock</label>
                <input name="stock" type="text" class="form-control" id="stock" value="{{ old('stock', $product->stock) }}">
            </div>
            @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product image --}}
            <div class="form-group">
                <label for="image">URL imatge</label>
                <input name="image" type="text" class="form-control" id="image" value="{{ old('image', $product->image) }}">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <br>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>

        @endsection
    </div>
</main>