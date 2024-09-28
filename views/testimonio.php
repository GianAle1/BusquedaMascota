<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Gian Alejandro">
    <meta name="descripcion" content="Testimonios">
    <meta name="keywords" content="Testimonio, Mascotas Perdidas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <title>Testimonios - Mascotas Perdidas</title>
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

<div class="container mt-4">
    <h1 class="text-center">Testimonios</h1>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header">Ana Pérez</div>
                <div class="card-body text-primary">
                    
                    <p class="card-text">"Gracias a Mascotas Perdidas, pude encontrar a mi gato perdido. Estoy muy agradecida por su ayuda!"</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header">Juan Martínez</div>
                <div class="card-body text-secondary">
                    
                    <p class="card-text">"El equipo de Mascotas Perdidas me apoyó en cada paso del camino. ¡Altamente recomendado!"</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header">Carla Gómez</div>
                <div class="card-body text-success">
                    
                    <p class="card-text">"Mi perrito fue encontrado gracias a la rápida respuesta del equipo. Un servicio increíble."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
