@extends('base.master')
@section('content')
<div class="container w-50 border p-4">
    <h1> <span class="badge bg-secondary">Crear Orden</span></h1>
    <form action="{{ route('orders') }}" method="POST">
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
                    <label for="customer" class="form-label">Cliente</label>
                    <select class="form-select" aria-label="Default select example" name="customer">
                        @foreach($customers as $customer)
                        <option value="{{$customer['id']}}">{{ $customer['customer_name'].'
                            '.$customer['customer_lastname']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="product" class="form-label">Producto</label>
                    <select class="form-select" aria-label="Default select example" name="product" id="product_id">
                        @foreach($products as $product)
                        <option value="{{$product['id']}}">{{ $product['product_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" class="form-control" name="price" value="some_{{ $product['price'] }}" id="price_id">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script type="text/javascript">
    $('#product_id').on('change', function (e) {
        var some = $(this).find('option:selected').val();
        document.getElementById("price_id").value = some;
    }); 
</script>
@endsection