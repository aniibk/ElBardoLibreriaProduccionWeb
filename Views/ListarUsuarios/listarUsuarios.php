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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
                </h3>
                <p class="text-justify">
                    Esta es la lista de todos nuestros colaboradores
                </p>
            </div>

            <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?= BASE_URL ?>agregarUsuario"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
                    </li>
                    <li>
                        <a class="active" href="<?= BASE_URL ?>listarUsuarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarUsuarios"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIOS</a>
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
								<th>DNI</th>
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>TELÉFONO</th>
								<th>USUARIO</th>
								<th>EMAIL</th>
                                <th>ROL</th>
                                <th>PERMISOS</th>                                
                                <th>ACTIVO</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        
                                   
                                    foreach ($parametros['listadoUsuarios'] as $valor) {
                                       
                                        
                                        
                                ?>
                                    <tr class="text-center">
                                    <td><?=$valor['id']?></td>
                                    <td><?=ucfirst($valor['dni']) ?></td>
                                    <td><?=ucfirst($valor['nombre']) ?></td>
                                    <td><?=ucfirst($valor['apellidos']) ?></td>
                                    <td><?=ucfirst($valor['telefono']) ?></td>
                                    <td><?=ucfirst($valor['direccion']) ?></td>
                                    <td><?=ucfirst($valor['email']) ?></td>
                                    <td><?=ucfirst($valor['rol']) ?></td>
                                    <td><?=ucfirst($valor['privilegio']) ?></td>

                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="popover">
                                            <i <?= $valor['activo'] == 1 ? 'class="fas fa-check"' : 'class="fas fa-times"'; ?>></i>
									    </button>
                                    </td>
                                    
                                    <td>
                                        <a href="<?= BASE_URL ?>actualizarUsuario?id=<?=$valor['id']?>" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?= BASE_URL ?>listarUsuarios/eliminarUsuario?id=<?=$valor['id']?>" class="btn btn-warning">
                                        <i class="far fa-trash-alt"></i>
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
                                <a class="btn btn-outline-primary mr-1 disabled" href="<?= BASE_URL ?>listarUsuarios?pagina=1>" tabindex="-1">Anterior</a>
                                <a  href="<?= BASE_URL ?>listarUsuarios" class="btn btn-outline-secondary mr-1 ">1</a>
                                
                                <?php
                                    for ($i=2; $i <= $parametros['totalPaginas'] ; $i++) { 
                                ?>
                            
                                        <a  href="<?= BASE_URL ?>listarUsuarios?&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>
                                        
                                <?php
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary" href="<?= BASE_URL ?>listarUsuarios?&pagina=2" tabindex="-1">Siguiente</a>
                                    <?php
                                }else{
                                    ?>
                                    <a class="btn btn-outline-primary mr-1 <?= $_GET['pagina'] == 1 ?"disabled": "" ?>" href="<?= BASE_URL ?>listarUsuarios?&pagina=<?=$_GET['pagina']-1?>" tabindex="-1">Anterior</a>
                                    <?php
                                    for ($i=1; $i <= $parametros['totalPaginas'] ; $i++) { 
                                        if(isset($_GET['pagina']) && $_GET['pagina'] == $i){
                                        
                                ?>
                        
                                <a  href="<?= BASE_URL ?>listarUsuarios&pagina=<?=$i?>" class="btn btn-outline-secondary mr-1 "><?=$i?></a>
                                    <?php
                                        }else{
                                    ?>
                                    <a  href="<?= BASE_URL ?>listarUsuarios&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>

                                    
                                    <?php
                                        }
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary <?= $_GET['pagina'] == $parametros['totalPaginas'] ?"disabled": "" ?>" href="<?= BASE_URL ?>listarUsuarios?pagina=<?=$_GET['pagina']+1?>" tabindex="-1">Siguiente</a>
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