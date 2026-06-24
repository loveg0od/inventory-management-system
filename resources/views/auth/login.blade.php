@extends('layouts.guest')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow" style="width: 450px;">
        <div class="card-body p-4">

<h3 class="text-center mb-4">
    Inventory Management System
</h3>

{{-- ERROR ALERT --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                        autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required>
                </div>

                <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember">

                    <label class="form-check-label">
                        Remember Me
                    </label>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary w-100">
                    Login
                </button>

            </form>

        </div>
    </div>
</div>
@endsection