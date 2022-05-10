@extends('layout')
@section('title', 'titulo')
@section('content')
    <main class="container">
        <div class="bg-light p-5 mt-5 rounded">
            <h1>Inici</h1>
            <p class="lead">Benvingut a l&apos;aplicació per gestionar productes.</p>

            <div class="row mt-4">
                <h4>Llistat de productes</h4>
            </div>

            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Producte</th>
                        <th scope="col">Codi</th>
                        <th scope="col">Preu</th>
                        <th scope="col">IVA</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Imatge</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }} </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->cost }}</td>
                            <td>{{ $product->iva }}</td>
                            <td>{{ $product->stock }}</td>
                            <td> <img src="{{ $product->image }}" width="60" alt=""> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-3 my-4">
                    <a class="btn btn-success" href="">Nou proveidor</a>
                </div>
            </div>

            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Proveidor</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Nif</th>
                        <th scope="col">Direcció</th>
                        <th scope="col">Logo</th>
                        <th scope="col" style="text-align: right">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->id }} </td>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>{{ $supplier->nif }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td><img src="{{ $supplier->logo }}" width="60" alt=""> </td>


                            <td style="text-align: right">
                                <div class="btn-group" role="group">
                                    <form method="GET" action="">
                                        <button type="submit" href="" class="btn btn-warning" style="border-radius: 5px 0 0 5px;">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="">
                                        <button type="submit" href="" class="btn btn-danger" style="border-radius: 0 5px 5px 0;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            

            <div class="row" style="margin-top: 4rem; margin-bottom: 1rem; ">
                <h4>Dades proveïdors de {{ $first_product->name }}</h4>
            </div>
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Día entrega</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($first_product->suppliers as $catan_supplier)
                        <tr>
                            <td>{{ $first_product->name }}</td>
                            <td>{{ $catan_supplier->name }}</td>
                            <td>{{ $catan_supplier->pivot->product_quantity }}</td>
                            <td>{{ $catan_supplier->pivot->order_day }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection
