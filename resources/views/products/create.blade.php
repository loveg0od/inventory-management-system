@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <h3>Add Product</h3>

        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" min="1" required>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" class="form-control" min="1" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">Save</button>

            <a href="{{ route('products.index') }}" class="btn btn-warning">
                Back
            </a>

        </form>

    </div>
@endsection
