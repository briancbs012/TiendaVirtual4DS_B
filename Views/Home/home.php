<?php headerTienda($data); ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= media(); ?>/image/panaderia.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= media(); ?>/image/viveres.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= media(); ?>/image/gaseosas.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="card-group">
    <div class="card">
        <!-- <img src="<?= media() ?>image/icons/Seguridad.png" class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">Seguridad</h5>
            <p class="card-text">Te vuelves vulnerable y puedes ser fácilmente herido cuando tus sentimientos de seguridad
                y felicidad dependen del comportamiento y las acciones de otras personas Ten fe en el propio
                esfuerzo y en la propia confianza. Con el poder de los pensamientos puedes determinar tu
                destino.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <!-- <img src="<?= media() ?>image/icons/Calidad.png" class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">Mejor Calidad</h5>
            <p class="card-text">Ten un compromiso “simple” pero decidido de que no vas a volver a hacer, bajo ninguna
                circunstancia, algo que no sea totalmente excelente. Tolera sólo la excelencia¡Primero la calidad!
                La calidad mantiene a la compañía en el mundo comercial y a ti en la nómina</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <!-- <img src="<?= media() ?>image/icons/dinero.png" class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">Mejor Precio</h5>
            <p class="card-text">Ahorras tiempo, ahorras dinero. <br>
                Porque tú lo vales te ofrecemos precios comodos para ti en tus compras
                por medio de nuestra aplicacion web y realizar tus pedidos correspondientes.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        No encuentras lo que buscabas?
    </div>
    <div class="card-body">
        <h5 class="card-title">Visita nuestra lista de produvtos mas recientes</h5>
        <p class="card-text">Tenemos varios tipos de productos visita nuestra lista de categorias para que encuentres lo que de verdad necesites.</p>
        <a href="#" class="btn btn-primary">Ir a Categorias</a>
    </div>
</div>
<div id='map' style='width: 400px; height: 300px;'></div>



<?php footerTienda($data); ?>