<?php
if (session_status() == 1) session_start();
require_once("models/productos_models.php");
?>

<div class="image">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br>
    <center>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Palm Springs Road" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show
                                that equal height action.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </center>


    <div class="container">
        <h1 class="text-center" id="catalogo">CATÁLOGO</h1>

        <div class="row">
            <?php foreach (productos_models::Mostrar() as $producto) {  ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/producto<?php echo $producto["id"] ?>.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3><?php echo $producto["producto"] ?></h3>
                            <p class="card-text"><?php echo $producto["descripcion"] ?>.</p>
                            <p>
                            <h3><?php echo $producto["precio"] . "$" ?></h3>
                            <h7>ITBMS: <?php echo $producto["precioventa"] . "$" ?></h7>

                            </p>

                            <hr>
                            <p>Cantidad disponible: <?php echo $producto["cantidad"] ?></p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="col text-center">
                                    <form method="post">
                                        <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                        <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar </button>
                                        <?php
                                        if ($_POST) {
                                            $obj = new seg();
                                            $h = $obj->compras();
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <br><br><br>
</div>