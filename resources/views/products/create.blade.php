@extends('layouts.app')

@section('title')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}" required>
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ old('product_code') }}" required>
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
