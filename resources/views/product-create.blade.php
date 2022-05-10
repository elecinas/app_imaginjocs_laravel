@extends('layout')
@section('title', 'titulo')
@section('content')
<main class="container">
    <div class="bg-light p-5 mt-5 rounded">
        <h3>Crear producte</h3>
        <form method="POST" action="{{ url('products') }}" >
            @csrf

            {{-- product name --}}
            <div class="form-group mt-3">
                <label for="name">Nom</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Monopoly classic">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product code --}}
            <div class="form-group mt-3">
                <label for="code">Codi ISBN</label>
                <input name="code" type="text" class="form-control" id="code" value="{{ old('code') }}" placeholder="0-7645-2641-3">
            </div>
            @error('code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product cost --}}
            <div class="form-group mt-3">
                <label for="cost">Preu</label>
                <input name="cost" type="text" class="form-control" id="cost" value="{{ old('cost') }}" placeholder="45.5">
            </div>
            @error('cost')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product iva --}}
            <div class="form-group mt-3">
                <label for="iva">IVA</label>
                <input name="iva" type="text" class="form-control" id="iva" value="{{ old('iva') }}" placeholder="21">
            </div>
            @error('iva')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product stock --}}
            <div class="form-group mt-3">
                <label for="stock">Quantitat en stock</label>
                <input name="stock" type="text" class="form-control" id="stock" value="{{ old('stock') }}" placeholder="25">
            </div>
            @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- product image --}}
            <div class="form-group mt-3">
                <label for="image">URL imatge</label>
                <input name="image" type="text" class="form-control" id="image" value="{{ old('image') }}" placeholder="https://direccion-dominio.com/images/nombre-imagen.jpg">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-secondary mt-4">Introduir producte</button>
        </form>
        @endsection
    </div>
</main>