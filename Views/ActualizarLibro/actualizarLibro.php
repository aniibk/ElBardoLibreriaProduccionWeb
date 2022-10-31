<!DOCTYPE html>
<html lang="es">

<?php 
    require_once 'Views/inc/crm/crmHead.php';
    
?>

<body>

    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <?php 
            require_once 'Views/inc/crm/crmNavLateral.php';
        ?>

        <!-- Page content -->
        <section class="full-box page-content">
            <?php 
                require_once 'Views/inc/crm/crmNavSup.php';
            ?>
            

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR LIBRO
                </h3>
                <p class="text-justify">
                    Por favor recordá revisar bien todos los campos antes de guardar.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                        <a href="<?= BASE_URL ?>agregarLibro"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LIBRO</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarlibros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LIBROS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarLibro"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR LIBRO</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->


            <div class="container-fluid">
            <form action="<?= BASE_URL ?>ActualizarLibro/updateLibro" class="form-neon" autocomplete="off" method="get">
                    <fieldset>
                        <legend><i class="fas fa-book"></i> &nbsp; Información</legend>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="titulo" class="bmd-label-floating">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?=$parametros['libro']['nombre']?>" required>
                                    </div>
                                    <input type="hidden" name="idLibro" value="<?=$parametros['libro']['id']?>" id="idLibro">
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="precio" class="bmd-label-floating">Precio</label>
                                        <input type="text" pattern="[0-9.]+[^,]{1,3}" class="form-control" name="precio" id="precio" value="<?=$parametros['libro']['precio']?>" maxlength="40" required>
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="editorial" class="bmd-label-floating">Editorial</label>
                                        <select class="form-control" name="editorial" id="editorial" required>
                                            <option value="" selected="" disabled="">Seleccione una Editorial</option>
                                            <?php 
                                                foreach ($parametros['editoriales'] as $key => $value) {
                                                    ?>
                                                    <option value="<?=$value['id']?>" <?= $parametros['libro']['editorial_id'] == $value['id'] ? 'selected' : '' ?>><?=ucfirst($value['nombre'])?></option>
                                                    <?php
                                                }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="genero" class="bmd-label-floating">Género</label>
                                        <select class="form-control" name="genero" id="genero" required>
                                            <option value="" selected="" disabled="">Seleccione un Género</option>
                                            <?php 
                                                foreach ($parametros['generos'] as $key => $value) {
                                                    ?>
                                                    <option value="<?=$value['id']?>" <?= $parametros['libro']['genero_id'] == $value['id'] ? 'selected' : '' ?>><?=ucfirst($value['nombre']) ?> </option>

                                                    <?php
                                                    
                                                }
                                            
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                        <label for="destacado" class="bmd-label-floating">Destacado</label>
                                        <input type="checkbox" class="ml-3" id="chkdestacado" name="destacado" value="1" <?= $parametros['libro']['destacado'] == 1 ? 'checked': '' ?>>

                                        <label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1"<?= $parametros['libro']['activo'] == 1 ? 'checked': '' ?>>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <div class="form-outline">
                                            <label for="descripcion" id="label-textarea" class="bmd-label-floating">Detalle</label>
                                            <textarea class="form-control" name="descripcion" id="textAreaExample" cols="60" rows="10" required minlength="10"><?=$parametros['libro']['descripcion']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pt-4">
                                    <div class="form-group col-sm-8 col-md-12 col-lg-6">
                                        <div class="form-group d-flex flex-column">
                                            <label for="portada" id="label-portada" class="bmd-label-floating ">Imagen de portada</label>
                                            <!-- <input type="hidden" name="portada" /> -->
                                            <img class="pb-5" src="<?= BASE_URL . $parametros['libro']['imagenPortada']?>" alt="">

                                            <!-- <input type="file" name="imágenes[]"  /> -->
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-12 col-md-4 pt-4">    
                                        <div class="form-group d-flex flex-column">
                                            <label for="banenr" id="label-banner" class="bmd-label-floating">Banner</label>
                                            <!-- <input type="hidden" name="banner" /> -->
                                            <img class="pb-5" src="<?= BASE_URL . $parametros['libro']['imagenBanner']?>" alt="">

                                            <!-- <input type="file" name="imágenes[]" /> -->

                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-left pb-4">
                                    <i class="fas fa-pen-square"></i> &nbsp; AGREGAR CAMPOS AL PRODUCTO
                                </h4>
                                
                                <div class="container-fluid">
                                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ESTADO</th>
                                <th>ACTIVAR/DESACTIVAR</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        $contador = 0;
                        foreach ($parametros['listadoCampos'] as $valor) {
                            $contador++;
                   
                                ?>
                                    <tr class="text-center">
                                    <td><?=$contador ?></td>
                                    
                                    <td><?=ucfirst($valor['nombre']) ?></td>
                                    
                                    
                                    <td><?=ucfirst($valor['opciones']) ?></td>

                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?php 

                                            $icono ="";
                                            if (!empty($parametros['camposActivosProducto'])) {

                                                foreach ($parametros['camposActivosProducto'] as $key => $value) {
                                                       
                                                    if ($value['campo_din_id'] == $valor['campo_din_id']) {
                                                            
                                                        if ($value['activo'] == 1 ) {
                                                            $icono = 'class="fas fa-check"';  
                                                        }
                                                    }
                                                }    
                                            }
                                            if(empty($icono)){
                                                $icono= 'class="fas fa-times"';
                                            }
                                            
                                            echo $icono;
                                            
                                             ?>></i>
									    </button>
                                    </td>
                                    <td>
                                    <select class="form-control" name="campos_din_producto[<?=$valor['id']?>][<?=$valor['campo_din_id']?>]'">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="1">activo</option>
                                            <option value="0">inactivo</option>

                                   
                                    </td>
                                    
                                   
                            </tr>
                                    
                            <?php  
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> -->
            </div>
                            </div>

                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="actualizar" value="1" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                </form>

                <!-- <div class="alert alert-danger text-center" role="alert">
                    <p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
                    <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
                </div> -->
            </div>

        </section>
    </main>


    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>