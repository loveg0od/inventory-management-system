<!DOCTYPE html>
<html>

<head>
    <title>Inventory System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;

            min-width: 320px;
            max-width: 450px;

            padding: 15px 20px;

            border-radius: 10px;

            color: white;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);

            z-index: 9999;

            opacity: 0;

            transform: translateX(100%);

            animation: slideIn 0.4s ease forwards;
        }

        .success-alert {
            background-color: #198754;
        }

        .error-alert {
            background-color: #dc3545;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-out {
            animation: fadeOut 0.5s ease forwards;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateX(100%);
            }
        }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark px-3">
        <a href="{{ route('welcome') }}" class="navbar-brand">
            IMS - Inventory Management System
        </a>


        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="text-white">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </nav>

    <div class="container mt-4">
        @if (session('success'))
            <div id="flashAlert" class="custom-alert success-alert">
                <strong>Success!</strong>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div id="flashAlert" class="custom-alert error-alert">
                <strong>Error!</strong>
                <span>{{ session('error') }}</span>
            </div>
        @endif
        @yield('content')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const alertBox = document.getElementById('flashAlert');

            if (alertBox) {

                setTimeout(() => {

                    alertBox.classList.add('fade-out');

                    setTimeout(() => {
                        alertBox.remove();
                    }, 500);

                }, 3000);

            }

        });
    </script>
</body>

</html>
