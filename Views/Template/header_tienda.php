<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= media(); ?>/css/styles-home.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

    <title>
        <?= $data['page_tag']; ?>
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?= media(); ?>/image/logo.png" alt="Logo Tienda Virtual"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/categorias">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/mis_pedidos">Mis Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/facturas">Facturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/top">Top Comprados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>/login">Iniciar Sesion</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Perfil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() ?>/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url() ?>/configuraciones">Configuraciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url() ?>/salir">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnRegresar btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>