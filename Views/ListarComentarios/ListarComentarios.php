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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE COMENTARIOS
                </h3>
                <p class="text-justify">
                    En esta sección están todos los comentarios de los libros. Desde "Ver" podes acceder a más detalles del comentario.
                </p>
            </div>

            <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                    
                    <li>
                        <a class="active" href="<?= BASE_URL ?>listarComentarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE COMENTARIOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarComentario"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR COMENTARIOS</a>
                    </li>
                </ul>
            </div>
            <?php 
                //ver($datos);
            ?>
            <!-- Content here-->
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>ID</th>
                                <th>LIBRO</th>
                                <th>E-MAIL</th>
                                <th>FECHA</th>
                                <th>VALORACIÓN</th>
                                <th>ACTIVO</th>
                                <th>COMENTARIO</th>
                                <th>VER</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                                   
                                    foreach ($parametros['listadoComentarios'] as $valor) {
                                        
                                    ?>
                                    <tr class="text-center">
                                    <td><?=$valor['id']?></td>
                                    <td><?=ucfirst($valor['nombreLibro']) ?></td>
                                    <td><?=ucfirst($valor['email']) ?></td>
                                    <td><?=ucfirst($valor['fecha']) ?></td>
                                    <td><?=estrellas($valor['valoracion']) ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?= $valor['activo'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Resumen comentario" data-content="<?= cortar_palabras($valor['descripcion'], 190)?>">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="<?= BASE_URL ?>habilitarComentario?id=<?=$valor['id']?>" class="btn btn-success">
                                        <i class="fas fa-plus-square"></i>
                                        </a>
                                    </td>
                                    <td>

                                    
                                        
                                    </td>
                            </tr>
                                    
                            <?php  
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="d-flex justify-content-center">
                    <?php  
                    
                    if($parametros['totalPaginas'] >= 2){

                    
                            if(!isset($_GET['pagina'])){
                                ?>  
                                <a class="btn btn-outline-primary mr-1 disabled" href="<?= BASE_URL ?>listarComentarios?pagina=1>" tabindex="-1">Anterior</a>
                                <a  href="<?= BASE_URL ?>listarComentarios" class="btn btn-outline-secondary mr-1 ">1</a>
                                
                                <?php
                                    for ($i=2; $i <= $parametros['totalPaginas'] ; $i++) { 
                                ?>
                            
                                        <a  href="<?= BASE_URL ?>listarComentarios?&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>
                                        
                                <?php
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary" href="<?= BASE_URL ?>listarComentarios?pagina=2" tabindex="-1">Siguiente</a>
                                    <?php
                                }else{
                                    ?>
                                    <a class="btn btn-outline-primary mr-1 <?= $_GET['pagina'] == 1 ?"disabled": "" ?>" href="<?= BASE_URL ?>listarComentarios?pagina=<?=$_GET['pagina']-1?>" tabindex="-1">Anterior</a>
                                    <?php
                                    for ($i=1; $i <= $parametros['totalPaginas'] ; $i++) { 
                                        if(isset($_GET['pagina']) && $_GET['pagina'] == $i){
                                        
                                ?>
                        
                                <a  href="<?= BASE_URL ?>listarComentarios&pagina=<?=$i?>" class="btn btn-outline-secondary mr-1 "><?=$i?></a>
                                    <?php
                                        }else{
                                    ?>
                                    <a  href="<?= BASE_URL ?>listarComentarios&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>

                                    
                                    <?php
                                        }
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary <?= $_GET['pagina'] == $parametros['totalPaginas'] ?"disabled": "" ?>" href="<?= BASE_URL ?>listarComentarios?pagina=<?=$_GET['pagina']+1?>" tabindex="-1">Siguiente</a>
                                    <?php
                            }    
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