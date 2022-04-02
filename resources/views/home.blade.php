@section('tittle','Home')
@extends('index')
@section('main-1')
    <div style="width: 92%;margin: 2% auto;">
        <h2 class="text-center mb-1">All Products</h2>
        <a class="btn btn-outline-primary mb-3" href="{{ route('create.product') }}"><i class="bi bi-credit-card-2-front"></i> Create Product</a>
        <table class="table table-hover text-center table-sm ">
            <thead>
            <tr class="table-light">
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <th class="align-middle" scope="row">{{ $key+1 }}</th>
                    <td class="align-middle">{{ $product->name }}</td>
                    <td class="align-middle">{{ $product->price }} BDT</td>
                    <td class="align-middle">{{ $product->desc }}</td>
                    <td class="align-middle"><img src="{{ asset('uplode/products/'.$product->photo) }}" alt="{{ $product->name }}" width="110px"></td>
                    <td class="align-middle">
                        <a class="btn btn-primary m-1" href="{{ route('edit.product',$product->id) }}"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a class="btn btn-danger m-1" href="{{ route('delete.product',$product->id) }}"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
