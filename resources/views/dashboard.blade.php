<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sistema de Facturación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .sidebar {
            height: 100vh;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        .nav-link {
            color: #ecf0f1;
        }
        .nav-link.active, .nav-link:hover {
            background-color: #34495e;
            color: #fff;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="d-flex">
        @extends('layouts.app')

        @section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Resumen General</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card p-4">
                    <h5 class="card-title text-muted">Ingresos Totales</h5>
                    <p class="card-text fs-3 fw-bold">$25,430</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h5 class="card-title text-muted">Facturas Pendientes</h5>
                    <p class="card-text fs-3 fw-bold">12</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h5 class="card-title text-muted">Nuevos Clientes</h5>
                    <p class="card-text fs-3 fw-bold">5</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4">
                    <h5 class="card-title text-muted">Productos Vendidos</h5>
                    <p class="card-text fs-3 fw-bold">156</p>
                </div>
            </div>
        </div>
        @endsection
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>