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
                    <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR LIBRO
                </h3>
                <p class="text-justify">
                    En esta parte vas a poder buscar un libro, ver todos los que tenemos y agregar nuevos.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                <?php
                    if ($_SESSION['usuario']['nivel']>3) {
                                
                ?>
                    <li>
                        <a href="<?= BASE_URL ?>agregarLibro"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LIBRO</a>
                    </li>
                    <?php
                    }
                                
                    ?>
                    <li>
                        <a href="<?= BASE_URL ?>listarlibros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LIBROS</a>
                    </li>
                    <li>
                        <a class="active" href="<?= BASE_URL ?>buscarLibro"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR LIBRO</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->
            <div class="container-fluid">
                <form class="form-neon" action="">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputSearch" class="bmd-label-floating">¿Qué libro estas buscando?</label>
                                    <input type="text" class="form-control" name="busqueda" id="inputSearch" maxlength="30">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-center" style="margin-top: 40px;">
                                    <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php 

            if (isset($parametros['busqueda'])) {
                ?>

            <div class="container-fluid">
                <form action="">
                    <input type="hidden" name="eliminar-busqueda" value="eliminar">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <p class="text-center" style="font-size: 20px;">
                                    Resultados de la busqueda <strong>“<?= $parametros['busqueda']?>”</strong>
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="text-center" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>ID</th>
                                <th>TITULO</th>
                                <th>EDITORIAL</th>
                                <th>GÉNERO</th>
                                <th>DESTACADO</th>
                                <th>ACTIVO</th>
                                <th>DESCRIPCION</th>
                                <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                            
                                ?>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                                <?php
                                }
                                
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php
                              
                                    $contador = 0;
                                    foreach ($parametros['resultadoBusqueda'] as $valor) {
                                        $contador++
                                ?>
                                    <tr class="text-center">
                                    <td><?=$valor['id']?></td>
                                    <td><?=ucfirst($valor['nombre']) ?></td>
                                    <td><?=ucfirst($valor['nombreEditorial']) ?></td>
                                    <td><?=ucfirst($valor['nombreGenero']) ?></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="popover">
										    <i <?= $valor['destacado'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?= $valor['activo'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Resumen descripción" data-content="<?= cortar_palabras($valor['descripcion'], 190)?>">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </td>
                                    <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                            
                                ?>
                                    <td>
                                        <a href="<?= BASE_URL ?>actualizarLibro?id=<?=$valor['id']?>" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i>
                                        </a>
                                    </td>
                                    <td>
                                    <a href="<?= BASE_URL ?>buscarLibro/eliminarLibro?id=<?=$valor['id']?>" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                    <?php
                                }
                                
                                ?>
                            </tr>
                                    
                            <?php  
                                }
                            ?>
                       
                           
                        </tbody>
                    </table>
                </div>
                
                <div class="d-flex justify-content-center">
                <?php  
                    
                    if($parametros['totalPaginas'] >= 2){

                    
                        if(!isset($_GET['pagina'])){
                            ?>  
                            <a class="btn btn-outline-primary mr-1 disabled" href="<?= BASE_URL ?>buscarLibro&busqueda=<?=$parametros['busqueda']?>&pagina=1>" tabindex="-1">Anterior</a>
                            <a  href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>" class="btn btn-outline-secondary mr-1 ">1</a>
                            
                            <?php
                                for ($i=2; $i <= $parametros['totalPaginas'] ; $i++) { 
                            ?>
                        
                                    <a  href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>
                                    
                            <?php
                                }
                                ?>
                                <a class="btn btn-outline-primary" href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=2" tabindex="-1">Siguiente</a>
                                <?php
                            }else{
                                ?>
                                <a class="btn btn-outline-primary mr-1 <?= $_GET['pagina'] == 1 ?"disabled": "" ?>" href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$_GET['pagina']-1?>" tabindex="-1">Anterior</a>
                                <?php
                                for ($i=1; $i <= $parametros['totalPaginas'] ; $i++) { 
                                    if(isset($_GET['pagina']) && $_GET['pagina'] == $i){
                                    
                            ?>
                    
                            <a  href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-secondary mr-1 "><?=$i?></a>
                                <?php
                                    }else{
                                ?>
                                <a  href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>

                                
                                <?php
                                    }
                                }
                                ?>
                                <a class="btn btn-outline-primary <?= $_GET['pagina'] == $parametros['totalPaginas'] ?"disabled": "" ?>" href="<?= BASE_URL ?>buscarLibro?&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$_GET['pagina']+1?>" tabindex="-1">Siguiente</a>
                                <?php
                        }    
                    }      
                    ?>
            </div>
        </div>

        <?php 
        }
       
        ?>
                </div>
            </div>

          
            

        </section>
    </main>


    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>