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
            </nav>

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; HABILITAR CAMPOS
                </h3>
            </div>
          
            <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?= BASE_URL ?>listarlibros"><i class="fas fa-arrow-left"></i> &nbsp; VOLVER</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>agregarCampos"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CAMPOS DINAMICOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarCampos"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CAMPOS DINAMICOS</a>
                    </li>
                </ul>
            </div>
          
            <!-- Content here-->
            <form action="#" class="form-neon" autocomplete="off" method="get">
            <div class="container-fluid">
                <div class="table-responsive">
                    <h4>Campos disponibles para la descripción del libro</h4>
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>NOMBRE</th>
                               
                                <th>OPCIONES</th>
                                <th>ESTADO</th>
                                <th>AGREGAR</th>
                                <th>QUITAR</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $contador = 0;
                                    foreach ($parametros['listadoCamposProducto'] as $valor) {

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
                                                       
                                                    if ($value['producto_id'] == $_GET['id'] && $value['campo_din_id']==$valor['id']) {
                                                        $icono = 'class="fas fa-check"';  
                                                        
                                                    }
                                                }    
                                            }
                                            
                                            if(empty($icono)){
                                               
                                                $icono= 'class="fas fa-times"';
                                            }
                                            
                                            echo $icono;
                                            $url= BASE_URL .'activarCampos/activarCampoProducto?idLibro='.$_GET["id"].'&idCampo='.$valor['id'];
                                           
                                             ?>></i>
									    </button>
                                    </td>
                                    
                                    <td>
                                    
                                        <a href=" <?=  $icono =='class="fas fa-check"' ? "#" : $url?>" class="btn btn-info">
                                            <i class="fas fa-save"></i>
                                        </a>
                                    </td>
                                    <td>

                                    <a href="<?= BASE_URL ?>activarCampos/eliminarCampo?idCampo=<?=$valor['id']?>&idlibro=<?=$_GET['id']?>" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        
                                    </td>
                            </tr>
                                    
                            <?php  
                                }
                            ?>
                        </tbody>
                    </table>
                    <br><br><br>
                    <div class="container-fluid">
                <div class="table-responsive">
                    <h4>Campos disponibles para los comentarios</h4>
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>NOMBRE</th>
                               
                                <th>OPCIONES</th>
                                <th>ESTADO</th>
                                <th>AGREGAR</th>
                                <th>QUITAR</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $contador = 0;
                                    foreach ($parametros['listadoCamposcomentarios'] as $valor) {

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
                                                       
                                                    if ($value['producto_id'] == $_GET['id'] && $value['campo_din_id']==$valor['id']) {
                                                        $icono = 'class="fas fa-check"';  
                                                        
                                                    }
                                                }    
                                            }
                                            
                                            if(empty($icono)){
                                               
                                                $icono= 'class="fas fa-times"';
                                            }
                                            
                                            echo $icono;
                                            $url= BASE_URL .'activarCampos/activarCampoProducto?idLibro='.$_GET["id"].'&idCampo='.$valor['id'];
                                           
                                             ?>></i>
									    </button>
                                    </td>
                                    
                                    <td>
                                    
                                        <a href=" <?=  $icono =='class="fas fa-check"' ? "#" : $url?>" class="btn btn-info">
                                            <i class="fas fa-save"></i>
                                        </a>
                                    </td>
                                    <td>

                                    <a href="<?= BASE_URL ?>activarCampos/eliminarCampo?idCampo=<?=$valor['id']?>&idlibro=<?=$_GET['id']?>" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        
                                    </td>
                            </tr>
                                    
                            <?php  
                                }
                            ?>
                        </tbody>
                    </table>
                    <br><br><br>
                    <!-- <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="actualizar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p> -->
                    <!-- <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="actualizar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p> -->
                </form>
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

        </section>
    </main>
    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>