@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <h3>Edit Category</h3>

        <form method="POST" action="{{ route('categories.update', $category->id) }}" id="categoryForm">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">
                    Name
                </label>

                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Description
                </label>

                <textarea name="description" class="form-control" rows="4">{{ old('description', $category->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="updateBtn" disabled>
                Update
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-warning">
                Back
            </a>

        </form>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const form = document.getElementById('categoryForm');
            const updateBtn = document.getElementById('updateBtn');

            const initialData = new FormData(form);

            function hasChanges() {
                const currentData = new FormData(form);

                for (const [key, value] of currentData.entries()) {
                    if (value !== initialData.get(key)) {
                        return true;
                    }
                }

                return false;
            }

            function checkChanges() {
                updateBtn.disabled = !hasChanges();
            }

            form.addEventListener('input', checkChanges);
            form.addEventListener('change', checkChanges);

            checkChanges();
        });
    </script>
@endsection
