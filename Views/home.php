<?php
require_once 'Views/inc/header.php';
?>
    <!-- contenido pagina -->
    <main class="fondo-portada">

        <section class="container">

            <!-- identidad sitio -->

            <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
                <img class="pt-5 img-fluid" src="assets/img/elbardoinmortal.png" alt="logo libreria">
                <h1 class="pt-5 titulo text-uppercase display-4">El Bardo Inmortal</h1>

                <blockquote class="blockquote">
                    <p class="mb-0 text-white">"No existe nada bueno ni malo, es el pensamiento humano el que lo hace parecer así"</p>
                    <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
                </blockquote>
            </div>
        </section>
        <!-- fin identidad sitio -->

        <!-- productos destacados -->
        <section>


            <div id="aside" class="container mt-5">

                <div class="col-lg-10 m-auto">
            
                    <div class="row">
                    <?php
                        
                         
                        foreach ($parametros['librosDestacados'] as $key => $a_producto) {
                            
                            $id_prod = $a_producto['id'];
                            $precio = $a_producto['precio'];
                            $nombre = $a_producto['nombre'];
                            $descripcion = cortar_palabras($a_producto['descripcion'], 70); 
                            $totalEstrellas = muestraEstrellas($parametros['todosLosComentarios'],'libro_id', $id_prod);
                            $img = $a_producto['imagenPortada'];
                            
                            ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100 producto">
                                    <a href="libros/producto/<?= $id_prod?>"><img class="card-img-top" src="<?php echo $img ?>" alt="<?php echo $nombre ?>"><span class="badge badge-danger destacado">NOVEDAD</span></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                        <a href="libros/producto/<?= $id_prod;?>"><?php echo $nombre?></a>
                                        </h4>
                                        <h5><?php echo "$". $precio ?></h5>
                                        <p class="card-text"><?= $descripcion ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small><?php echo $totalEstrellas?></small>
                                    </div>
                                </div>
                            </div>
                            <?php
                        
                            }
                   

                             ?>
                        
                        </div>

                    </div>

                </div>
            </div>
            </div>
        </section>
        <!-- fin productos destacados -->
    </main>

    <!-- inicio Footer -->
    <?php
        require_once 'Views/inc/footer.php';
    ?>
