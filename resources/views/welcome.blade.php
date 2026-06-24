@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="mb-4">
            <h3>Dashboard</h3>
            <p class="text-muted">
                Dashboard Overview
            </p>
        </div>

        <div class="row g-3">

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Total Categories</h5>
                        <h2>{{ $totalCategories }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Total Products</h5>
                        <h2>{{ $totalProducts }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Total Transactions</h5>
                        <h2>{{ $totalTransactions }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <h5>Menu</h5>

            <div class="d-flex gap-3 mt-3">

                <a href="{{ route('categories.index') }}" class="btn btn-primary">
                    Categories
                </a>

                <a href="{{ route('products.index') }}" class="btn btn-success">
                    Products
                </a>

                <a href="{{ route('transactions.index') }}" class="btn btn-warning">
                    Transactions
                </a>

            </div>
        </div>

    </div>
@endsection
