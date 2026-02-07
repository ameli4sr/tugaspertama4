<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Landing Page Laravel 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">MyLanding</a>
        <div>
            <a href="/" class="text-white me-3">Home</a>
            <a href="/about" class="text-white me-3">About</a>
            <a href="/services" class="text-white me-3">Services</a>
            <a href="/contact" class="text-white">Contact</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    © {{ date('Y') }} Landing Page Laravel 12
</footer>

</body>
</html>
