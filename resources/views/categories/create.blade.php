@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <h3>Add Category</h3>

        <form method="POST" action="{{ route('categories.store') }}" id="categoryForm">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" id="nameField">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" id="descField"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="saveBtn" disabled>
                Save
            </button>

            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const nameField = document.getElementById('nameField');
            const saveBtn = document.getElementById('saveBtn');

            function checkForm() {
                const name = nameField.value.trim();

                if (name !== '') {
                    saveBtn.disabled = false;
                } else {
                    saveBtn.disabled = true;
                }
            }

            nameField.addEventListener('input', checkForm);

            checkForm();
        });
    </script>
@endsection
