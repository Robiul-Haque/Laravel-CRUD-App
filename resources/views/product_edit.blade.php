@section('tittle','Edit Product')
@extends('index')
@section('main-3')
    <form action="{{route('edit.product',$product->id)}}" method="post" enctype="multipart/form-data" style="width: 40%; margin: 2% auto;">
        <h2 style="text-align: center; margin-bottom: 16px;">Update Product</h2>
        <a class="btn btn-outline-danger mb-3" href="{{ route('product.list') }}"><i class="bi bi-list"></i> Product List</a>
        @csrf
        <div class="mb-3">
            <label class="form-label">Product name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">Product price</label>
            <input type="number" class="form-control " name="price"  value="{{ $product->price }}">

        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control " name="desc" rows="3">{{ $product->desc }}</textarea>

        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo">
            <img src="{{ asset('uplode/products/'.$product->photo) }}" alt="{{ $product->name }}" width="110px" class="mt-2">
        </div>
        <button class="btn btn-outline-primary"><i class="bi bi-arrow-right-short"></i> Submit</button>
    </form>
@endsection
