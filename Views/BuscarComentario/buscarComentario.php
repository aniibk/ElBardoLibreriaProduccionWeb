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
                    <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR COMENTARIO
                </h3>
                <p class="text-justify">
                    Recordá seleccionar una de las opciones. Si queres ver todos los comentarios simplemente presiona buscar.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    
                    <li>
                        <a href="<?= BASE_URL ?>listarComentarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE COMENTARIOS</a>
                    </li>
                    <li>
                        <a class="active" href="<?= BASE_URL ?>buscarComentario"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR COMENTARIOS</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->
            <?php
                if(isset($_GET['opt'])){
                    $opt = $_GET['opt'];
                }else{
                    $opt = "";
                }
            ?>
            <div class="container-fluid">
                <form class="form-neon" action="">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                            <div class="form-group bmd-form-group col-6">
										<label for="item_estado" class="bmd-label-floating">Opciones de busqueda</label>
										<select class="form-control" name="opt" id="item_estado">
											<option value=""  disabled="" required>Seleccione una opción</option>
											<option value="libro" <?= $opt == 'libro' ? 'selected' : '' ?>>Titulo libro</option>
											<option value="email" <?= $opt == 'email' ? 'selected' : '' ?>>e-mail</option>
                                            <option value="fecha" <?= $opt == 'fecha' ? 'selected' : '' ?>>Fecha</option>
                                            <option value="comentarios" <?= $opt == 'comentarios' ? 'selected' : '' ?>>Comentario</option>
                                            <option value="valoracion" <?= $opt == 'valoracion' ? 'selected' : '' ?>>Valoración</option> 
                                            <option value="activo" <?= $opt == 'activo' ? 'selected' : '' ?>>Estado</option>

										</select>
									</div>
                                <div class="form-group">
                                    <label for="inputSearch" class="bmd-label-floating">Palabra clave</label>
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
                        
    
                                    foreach ($parametros['resultadoBusqueda'] as $valor) {
    
                                        
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
                <div class="d-flex justify-content-center">
                    <?php  
                    
                    if($parametros['totalPaginas'] >= 2){

                    
                            if(!isset($_GET['pagina'])){
                                ?>  
                                <a class="btn btn-outline-primary mr-1 disabled" href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=1>" tabindex="-1">Anterior</a>
                                <a  href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>" class="btn btn-outline-secondary mr-1 ">1</a>
                                
                                <?php
                                    for ($i=2; $i <= $parametros['totalPaginas'] ; $i++) { 
                                ?>
                            
                                        <a  href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>
                                        
                                <?php
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary" href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=2" tabindex="-1">Siguiente</a>
                                    <?php
                                }else{
                                    ?>
                                    <a class="btn btn-outline-primary mr-1 <?= $_GET['pagina'] == 1 ?"disabled": "" ?>" href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$_GET['pagina']-1?>" tabindex="-1">Anterior</a>
                                    <?php
                                    for ($i=1; $i <= $parametros['totalPaginas'] ; $i++) { 
                                        if(isset($_GET['pagina']) && $_GET['pagina'] == $i){
                                        
                                ?>
                        
                                <a  href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-secondary mr-1 "><?=$i?></a>
                                    <?php
                                        }else{
                                    ?>
                                    <a  href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$i?>" class="btn btn-outline-primary mr-1 "><?=$i?></a>

                                    
                                    <?php
                                        }
                                    }
                                    ?>
                                    <a class="btn btn-outline-primary <?= $_GET['pagina'] == $parametros['totalPaginas'] ?"disabled": "" ?>" href="<?= BASE_URL ?>buscarComentario?opt=<?=$opt?>&busqueda=<?=$parametros['busqueda']?>&pagina=<?=$_GET['pagina']+1?>" tabindex="-1">Siguiente</a>
                                    <?php
                            }    
                        }      
                        ?>
                </div>
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