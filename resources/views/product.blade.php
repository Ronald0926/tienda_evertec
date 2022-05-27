@extends('base.master')
@section('content')
<div class="container w-50 border p-4">
    <h1> <span class="badge bg-secondary">Productos</span></h1>
    <form action="{{ route('products') }}" method="POST">
        @csrf

        @if(session('success'))
        <h5 class="alert alert-success">{{ session('success') }}</h5>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <div class="alert-text">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div><br />
        @endif

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="product_name" class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control"  name="price" value="{{ old('price') }}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <input type="text" class="form-control"  name="description" value="{{ old('description') }}">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

    <div>
        <div class="row py-1">
            <div class="col-md-9 d-flex align-items-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Moneda</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->product_name}} </td>
                            <td>{{ $product->price}} </td>
                            <td>{{ $product->currency}} </td>
                            <td>{{ $product->description}} </td>
                        <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection