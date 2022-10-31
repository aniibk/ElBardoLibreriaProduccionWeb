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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CAMPOS DINAMICOS
                </h3>
            </div>

            <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?= BASE_URL ?>agregarCampos"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CAMPOS PRODUCTOS</a>
                    </li>
                    <li>
                        <a class="active" href="<?= BASE_URL ?>listarCampos"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CAMPOS DINAMICOS</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>TIPO CAMPO</th>
                                <th>OPCIONES</th>
                                <th>ACTIVO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
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
                                    <td><?=ucfirst($valor['tipo']) ?></td>
                                    <td><?=ucfirst($valor['opciones']) ?></td>

                                    
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?= $valor['activo'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    
                                    <td>
                                        <a href="<?= BASE_URL ?>actualizarCampo?id=<?=$valor['id']?>" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i>
                                        </a>
                                    </td>
                                    <td>

                                    <a href="<?= BASE_URL ?>listarCampos/eliminarCampo?id=<?=$valor['id']?>" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        
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

        </section>
    </main>
    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>