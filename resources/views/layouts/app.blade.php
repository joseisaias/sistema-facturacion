<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Facturación')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f0f2f5; }
        .sidebar { height: 100vh; background-color: #2c3e50; color: #ecf0f1; }
        .nav-link { color: #ecf0f1; }
        .nav-link.active, .nav-link:hover { background-color: #34495e; color: #fff; }
        .card { border: none; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3">
            <h4 class="text-white mb-4">Dashboard</h4>
            <nav class="nav flex-column">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="bi bi-house-door me-2"></i>Inicio</a>
                <a class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}" href="/clientes"><i class="bi bi-people me-2"></i>Clientes</a>
                <a class="nav-link" href="#"><i class="bi bi-file-earmark-text me-2"></i>Facturas</a>
                <a class="nav-link" href="#"><i class="bi bi-graph-up me-2"></i>Reportes</a>
            </nav>
        </div>
        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>