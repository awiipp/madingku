<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    {{-- feather icon --}}
    <script src="https://unpkg.com/feather-icons"></script>

    @vite('resources/css/app.css')
    <title>MadingKu | {{ $title }}</title>
</head>

<body class="text-neutral-800">
    @yield('body')
    <script>
        feather.replace();
    </script>
</body>

</html>