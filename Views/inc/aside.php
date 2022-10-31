<?php
    //$urlArchivos= BASE_URL.'/assets
?>

<!-- desde aca -->

<div class="col-lg-3 col-md-4 col-sm-12">

    <div class="container-fluid">
        <img class="img-fluid mx-auto pt-5 " src="<?=BASE_URL?>/assets/img/elbardoinmortal.png" alt="logo libreria">
        <h2 class="pt-3 text-center text-uppercase">El Bardo Inmortal</h1>

    </div>
    <?php
        
        

    ?>



    <div>

        <form id="filtros" method="POST">
            <!-- buscador editoriales -->
            <ul class="list-group pt-5">
                <h3>Editoriales</h3>
                <?php
                    foreach ($parametros['editoriales'] as $a_editorial) {
                    $id = $a_editorial['id'];
                    $titulo = $a_editorial['nombre'];
                ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                        <?php
                            echo '<input type="checkbox" class="custom-control-input editorial form-check-input" id="e'. $id .'" name="editorial_id[]"  value = "'.$id.'">';

                            echo '<label class="custom-control-label" for="e' . $id . '">' . ucwords($titulo) . '</label>';
                            ?>
                    </div>

                </li>

                <?php
                }
                ?>


            </ul>
            <!-- Buscador Generos -->
            <ul class="list-group pt-5">
                <h3>Generos</h3>
                <?php
                    foreach ($parametros['generos'] as $a_genero) {
                    $id = $a_genero['id'];
                    $titulo = $a_genero['nombre'];
                    
                    
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox">
                            <?php
                                echo '<input type="checkbox" class="custom-control-input form-check-input" id="g' . $id . '" name="genero_id[]"  value = "'.$id.'">';
    
    
                                echo '<label class="custom-control-label" for="g' . $id . '">' . ucwords($titulo) . '</label>';
                                ?>
                        </div>
                        
                    </li>
                </ul>
                <?php
                    }
                ?>


                    <ul class="list-group pt-5">
                              

                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input form-check-input" id="destacados" name="destacado[]" value="1">
                                      <label class="custom-control-label" for="destacados">Novedades</label>
                                  </div>
                              </li>
                 
              
                  
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input form-check-input pick-one" id="az" name="order[]" value="ASC">
                                      <label class="custom-control-label" for="az">A-Z</label>
                                  </div>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input form-check-input pick-one" id="za" name="order[]" value="DESC">
                                      <label class="custom-control-label" for="za">Z-A</label>
                                  </div>
                              </li>
                  </ul>

        </form>

    </div>


</div>





