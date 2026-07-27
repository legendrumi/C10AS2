<!DOCTYPE html>
<html lang="tk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Doki Kitaphanasy</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.min.css') }}">
    <style>
        .bg-grandient {
            background: #020024;
            background: linear-gradient(90deg,rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }

        body {
            position: relative;
            margin: 0;
            min-height: 100vh;
            background-image: url('{{ asset("img/book.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(9, 3, 51, 0.7);
            z-index: -1;
        }
    </style>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <div class="container-xxl flex-grow-1 py-4">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>