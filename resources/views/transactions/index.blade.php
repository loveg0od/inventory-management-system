@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <h3>Transactions</h3>

        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">
            + New Transaction
        </a>

        <a href="{{ route('welcome') }}" class="btn btn-warning mb-3">
            Back
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transactions as $key => $trx)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $trx->product->name }}</td>
                        <td>{{ $trx->quantity }}</td>
                        <td>{{ $trx->total_price }}</td>
                        <td>
                            <form method="POST" action="{{ route('transactions.destroy', $trx->id) }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
