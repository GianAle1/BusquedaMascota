<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Gian Alejandro">
    <meta name="descripcion" content="Portafolio">
    <meta name="keywords" content="Perro, Perdido,Busqueda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <title>Mascotas Perdidas</title>
    <link rel="icon" type="image/x-icon" href="image/fivicon.jpeg">
</head>
<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/carrusel1.jpg" class="d-block w-100" alt="carrusel 1">
            </div>
            <div class="carousel-item">
                <img src="image/carrusel2.jpg" class="d-block w-100" alt="carrusel 2">
            </div>
            <div class="carousel-item">
                <img src="image/carrusel3.jpg" class="d-block w-100" alt="carrusel 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <a class="navbar-brand" href="#"><img src="image/fivicon.jpeg" width="50" alt="Logo de la Web"></a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Mascotas Perdidas</a></li>
                    <li class="nav-item"><a class="nav-link" href="testimonio.php">Testimonio</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-custom">
        <h1 class="text-center">Mascotas Perdidas</h1>
        <div class="row">
            <?php 
            // Aquí se conectan a la base de datos y se obtienen las mascotas
            require_once '../config/database.php';
            require_once '../models/Mascota.php';

            $db = connectDB();
            $mascotaModel = new Mascota($db);
            $mascotas = $mascotaModel->getMascotasPerdidas(); // Obtén las mascotas perdidas

            foreach ($mascotas as $mascota): ?>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div id="carouselMascota<?= $mascota['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php 
                                // Aquí se obtienen las imágenes de la mascota
                                $imagenes = $mascotaModel->getImagenesPorMascota($mascota['id']);
                                foreach ($imagenes as $index => $imagen): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <img src="<?= htmlspecialchars($imagen['ruta']) ?>" class="d-block w-100" alt="Imagen de <?= htmlspecialchars($mascota['nombre']) ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMascota<?= $mascota['id'] ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMascota<?= $mascota['id'] ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($mascota['nombre']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($mascota['descripcion']) ?></p>
                            <p class="card-text"><small class="text-body-secondary">Estado: <?= htmlspecialchars($mascota['estado']) ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
