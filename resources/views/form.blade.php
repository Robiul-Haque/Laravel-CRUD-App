@section('tittle','Create Product')
@extends('index')
@section('main-2')
    <form action="{{route('create.product')}}" method="post" enctype="multipart/form-data" style="width: 40%; margin: 2% auto;">
        <h2 style="text-align: center; margin-bottom: 16px;">Create Product</h2>
        <a class="btn btn-outline-danger mb-3" href="{{ route('product.list') }}"><i class="bi bi-list"></i> Product List</a>
        @csrf
        <div class="mb-3">
            <label class="form-label">Product name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
            @error('name')
              <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Product price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
            @error('price')
              <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc" rows="3">{{ old('desc') }}</textarea>
            @error('desc')
              <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
            @error('photo')
              <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
        <button class="btn btn-outline-primary"><i class="bi bi-arrow-right-short"></i> Submit</button>
    </form>
@endsection
