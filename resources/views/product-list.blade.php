@extends('layout')
@section('title', 'titulo')
@section('content')
    <main class="container">
        <div class="bg-light p-5 mt-5 rounded">
            <h3>Llista de productes</h3>

            <div class="row">
                <div class="col-md-3 my-4">
                    <a class="btn btn-success" href="{{ route('product.create') }}">Nou producte</a>
                </div>
            </div>

            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Producte</th>
                        <th scope="col">Codi ISBN</th>
                        <th scope="col">Preu</th>
                        <th scope="col">IVA</th>
                        <th scope="col">Imatge</th>
                        <th scope="col">Stock</th>
                        <th scope="col" style="text-align: right">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }} </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->cost }}€</td>
                            <td>{{ $product->iva }}%</td>
                            <td> <img src="{{ $product->image }}" width="60" alt=""> </td>
                            <td>{{ $product->stock }}</td>


                            <td style="text-align: right">
                                <div class="btn-group" role="group">
                                    <form method="GET" action="{{ route('product.edit', $product->id) }}">
                                        @csrf
                                        <button type="submit" href="" class="btn btn-warning"
                                            style="border-radius: 5px 0 0 5px;">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('product.delete', $product->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="" class="btn btn-danger"
                                            style="border-radius: 0 5px 5px 0;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection
