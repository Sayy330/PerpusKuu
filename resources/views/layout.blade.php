<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpusku</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #50C878; /* Emerald Green */
            --secondary-color: #FFFFF0; /* Ivory */
        }

        body {
            background-color: var(--secondary-color);
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .navbar a {
            color: var(--secondary-color) !important;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #fff !important;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-light" href="/">📚 Perpusku</a>
            <div>
                <a href="/books" class="nav-link d-inline-block me-3">Buku</a>
                <a href="/categories" class="nav-link d-inline-block me-3">Kategori</a>
                <a href="/students" class="nav-link d-inline-block me-3">Siswa</a>
                <a href="/borrowings" class="nav-link d-inline-block">Peminjaman</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

</body>
</html>
