
@extends('base.base')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('update_product', $product->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
    @csrf
    @method('put')
    <div class="col-md-6">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}">
        @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="details" class="form-label">Product Details</label>
        <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" rows="3">{{ old('details', $product->details) }}</textarea>
        @error('details')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="product_category" class="form-label">Product Category</label>
        <select id="product_category" name="product_category" class="form-select @error('product_category') is-invalid @enderror">
            <option value="" selected disabled>Select a Product Category</option>
            @foreach($product_categories as $pc)
            <option value="{{ $pc->id }}" {{ old('product_category', $product->category_id) == $pc->id ? 'selected' : '' }}>{{ $pc->name }}</option>
            @endforeach
        </select>
        @error('product_category')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="stock" class="form-label">Initial Stock</label>
        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
        @error('stock')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Product Image (jpg, jpeg, png)</label>
        @if($product->image_path)
        <div class="mb-2">
            <img src="{{ asset('product_image/' . $product->image_path) }}" alt="{{ $product->name }}" style="max-height: 100px;">
            <p class="small text-muted">Current Image</p>
        </div>
        @endif
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning">Edit Product</button>
        <a href="{{ route('store') }}" class="btn btn-secondary">Back</a>
    </div>
</form>
@endsection