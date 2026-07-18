<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Catálogo de Videojuegos</title>
    <!-- CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/mix-style.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">🎮 Mi Catálogo Virtual</a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Videojuegos</h2>
            <!-- Este botón servirá en el futuro para crear un juego -->
            <button class="btn btn-primary">+ Agregar Juego</button>
        </div>

        <!-- Grid de Tarjetas -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($videojuegos as $juego)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <!-- Portada de prueba -->
                        <div class="card-img-top d-flex align-items-center justify-content-center text-muted fs-4">
                            🎮
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ $juego->titulo }}</h5>
                            <p class="card-text text-secondary mb-1">
                                <strong>Plataforma:</strong> <span class="badge bg-secondary">{{ $juego->plataforma }}</span>
                            </p>
                            <p class="card-text text-secondary mb-3">
                                <strong>Año:</strong> {{ $juego->anio }}
                            </p>
                            <p class="card-text text-muted small text-truncate" style="max-height: 50px;">
                                {{ $juego->descripcion }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between pb-3">
                            <button class="btn btn-sm btn-outline-warning">Editar</button>
                            <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>