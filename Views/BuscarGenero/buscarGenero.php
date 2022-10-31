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
                    <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR GÉNERO
                </h3>
                <p class="text-justify">
                    Si la búsqueda no te convence, podes revisar nuestra lista de géneros.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                <?php
                                    if ($_SESSION['usuario']['nivel']>3) {
                                                                    
                                    ?>
                    <li>
                        <a href="<?= BASE_URL ?>agregarGenero"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR GÉNERO</a>
                    </li>
                    <?php
                                }
                                
                                ?>
                    <li>
                        <a href="<?= BASE_URL ?>listarGeneros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE GÉNEROS</a>
                    </li>
                    <li>
                        <a class="active" href="<?= BASE_URL ?>buscarGenero"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR GÉNERO</a>
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
                                    <label for="inputSearch" class="bmd-label-floating">¿Qué género estas buscando?</label>
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
                                <th>#</th>
                                <th>GÉNERO</th>
                                <th>ACTIVO</th>
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
                                    <td><?=$contador ?></td>
                                    
                                    <td><?=ucfirst($valor['nombre']) ?></td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?= $valor['activo'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    <?php
                                    if ($_SESSION['usuario']['nivel']>3) {
                                                                    
                                    ?>
                                    
                                    <td>
                                        <a href="<?= BASE_URL ?>actualizarGenero?id=<?=$valor['id']?>" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i>
                                        </a>
                                    </td>
                                    <td>

                                    <a href="<?= BASE_URL ?>buscarGenero/eliminarGenero?id=<?=$valor['id']?>" class="btn btn-warning">
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

            <?php 
            }
           
            ?>


            

        </section>
    </main>


    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>