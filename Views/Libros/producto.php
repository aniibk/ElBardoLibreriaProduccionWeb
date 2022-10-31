

<?php require_once 'Views/inc/header.php'?>


<main>


    
    <div class="container mt-5">
    
            <div class="row justify-content-center">
    <?php
     
     
      $id_libro = $parametros['id'];
      $titulo = ucfirst($parametros['nombre']);
      $precio = '$' .$parametros['precio'];
      $editorial = ucfirst($parametros['nombreEditorial']);
      $genero = ucfirst($parametros['nombreGenero']);
      $descripcion = ucfirst($parametros['descripcion']);
      $estrellas = estrellas($parametros['promedio']); 
      $id_banner = $parametros['id'];
      $banner = BASE_URL.$parametros['imagenBanner']; 
      
    ?>



            <div class="col-lg-9 col-md-8 ">
             <!-- carrusel -->
             <div id="carouselExampleIndicators" class="carousel slide my-4 ocultar" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a href="<?=BASE_URL;?>libros/producto/1"><img class="d-block img-fluid" src="<?=BASE_URL;?>Assets/img/banner/bannerHarry.jpg" alt="Coleccion libros harry potter salamandra">
                            </a>
                        </div>
                        <div class="carousel-item">
                          <a href="<?=BASE_URL;?>libros/producto/7"> <img class="d-block img-fluid" src="<?=BASE_URL;?>Assets/img/banner/bannersacheri.jpg" alt="editorial siglo veintiuno">
                          </a>
                        </div>
                        <div class="carousel-item">
                            <a href="<?=BASE_URL;?>libros/producto/10"><img class="d-block img-fluid" src="<?=BASE_URL;?>Assets/img/banner/alfaguaraBanner.jpg" alt="editorial Alfaguara">
                            </a>
                            
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>


                <!-- fin carrusel -->
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="<?= $banner ?>" alt="<?= $titulo?>">
                    <div class="card-body">
                        <h3 class="card-title"><?= $titulo?></h3>
                        <h4 class="pb-1"><?= $precio?></h4>
                        <h5 class="pb-1" name="Editorial">Editorial: <?= $editorial?></h5>
                        <h5 class="pb-1">Género Literario: <?= $genero?></h5>
                        <p class="card-text mb-2"><?= $descripcion?></p>
                        <?php
                        foreach ($parametros['camposDinamicosActivosProducto'] as $keys => $valores) {
                            
                                ?>
                                <p class="card-text mb-2"><?=ucfirst($valores['opciones'])?></p>
                                <?php
                      
                        }
                        ?>                      
                        <p class="font-weight-bold mt-3 mb-0">Valoracion general</p>
                        <span class="text-warning"><?= $estrellas?></span>


                    </div>
                    <div class="align-items-center">
                        <div class="row w-100 align-items-center">
                            <div class="col ml-3">                                                                        
                                <a href="<?=BASE_URL;?>libros" class="btn btn-warning mb-3">Volver</a>                                                                      
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card card-outline-secondary my-4">
                    <div class="card-body">
                        <h4>Comentarios</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        
                    foreach ($parametros['comentarios'] as $indice => $a_comentario) {                      
                             
                           
                            $comentario = $a_comentario['descripcion']; 
                            $mail = $a_comentario['email'];
                            $valoracion = $a_comentario['valoracion'];
                     
                     ?>
                        <p><?php echo $comentario?></p>
                        <small class="text-muted">Comentado por <?php echo $a_comentario['email'] ?></small>
                        <br>
                        <small class="text-muted">Valoracion <?php echo estrellas($valoracion)?></small>
                        <hr>
                        <?php
                     
                 
               }
            ?>
                                 
                        <h5>Dejanos tu reseña</h5>
                        <form action="<?php echo BASE_URL;?>/gracias" method="GET">
                            <div class="form-group">

                            <input type="hidden" disable="disable" class="form-control" name="insertComentario"
                                value= "0" id="insertComentario">

                                <label for="recipient-name" class="col-form-label">e-mail</label>
                                <input type="email" class="form-control" name="mail" id="email"
                                    placeholder="Direccion de email" required>
                            </div>

                            <input type="hidden" disable="disable" class="form-control" name="banner"
                                value=<?php echo $id_banner; ?> id="banner">

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Reseña:</label>
                                <textarea class="form-control" name="comentario" id="message-text" required></textarea>
                            </div>

                            <label for="Asunto">Calificación</label>
                            <select class="custom-select mb-3" name="valoracion" id="Valoracion" required>
                                <option selected value=5><span class="text-warning">&#9733; &#9733; &#9733; &#9733;
                                        &#9733;</span></option>
                                <option value="4"><span class="text-warning">&#9733; &#9733; &#9733; &#9733;
                                        &#9734;</span>
                                </option>
                                <option value="3"><span class="text-warning">&#9733; &#9733; &#9733; &#9734;
                                        &#9734;</span>
                                </option>
                                <option value="2"><span class="text-warning">&#9733; &#9733; &#9734; &#9734;
                                        &#9734;</span>
                                </option>
                                <option value="1"><span class="text-warning">&#9733; &#9734; &#9734; &#9734;
                                        &#9734;</span>
                                </option>
                            </select>
                            <div class="form-group">
                                <?php
                                if (isset($parametros['camposDinamicosActivosComentario'])) {
                                    muestrarCampoDinamicoComentario($parametros['camposDinamicosActivosComentario']);
                                }
                                
                                ?>
                            </div>
                            <div class="mt-3">

                                <button type="submit" class="btn btn-warning" type="button">
                                    Enviar
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

</main>

<!-- inicio Footer -->
<?php
require_once 'Views/inc/footer.php';
?>