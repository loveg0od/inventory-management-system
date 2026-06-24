@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <h3>Create Transaction</h3>

        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf

            <div class="mb-3">
                <label>Product</label>
                <select name="product_id" class="form-control">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} (Stock: {{ $product->stock }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control">
            </div>

            <button class="btn btn-primary">Save</button>

            <a href="{{ route('transactions.index') }}" class="btn btn-warning">
                Back
            </a>

        </form>

    </div>
@endsection
