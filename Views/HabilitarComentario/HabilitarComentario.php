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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; HABILITAR COMENTARIO
                </h3>
                <p class="text-justify">
                    Vas a poder activar o desactivar comentarios. ¡Un gran poder conlleva una gran responsabilidad!
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?= BASE_URL ?>listarComentarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE COMENTARIOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarComentario"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR COMENTARIOS</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->+
            <div class="container-fluid">

                <form action="<?= BASE_URL ?>HabilitarComentario/updateComentario" class="form-neon" autocomplete="off" method="get">
                    <fieldset>
                        <legend><i class="fas fa-book"></i> &nbsp; Información</legend>
                        <div class="container-fluid ">
                            <div class="row">      
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                    <legend>USUARIO</legend>
                                        <p class="color-text"><?=$parametros['comentario']['email'] ?></p>
                                        <legend>COMENTARIO</legend>
                                        <p class="color-text"><?=$parametros['comentario']['descripcion'] ?></p>
                                    </div>
                                </div>   
                                <div class="col-12 col-md-4">    
                                    <div class="form-group pt-4 pl-4">
                                    <legend>VALORACION</legend>
                                        <p class="color-text"><?=estrellas($parametros['comentario']['valoracion']) ?></p>
                                    <legend>FECHA</legend>
                                        <p class="color-text"> <?=$parametros['comentario']['fecha'] ?></p>
                                    <legend>LIBRO</legend>
                                        <h4 class="color-text"> <?=$parametros['comentario']['nombreLibro'] ?></h4>
                                    </div>
                                </div>
                               
                                
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                        <input type="hidden" name="id" value="<?=$parametros['comentario']['id']?>">
                                        <label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1" <?= $parametros['comentario']['activo'] == 1 ? 'checked': '' ?>>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-12 col-md-4">    
                                    <div class="form-group pt-4 pl-4">
                                    
                                    <?php
                                        if (isset($parametros['comentarioDinamico']) && !empty($parametros['comentarioDinamico'])) {
                                            ?>
                                            <p>CAMPOS DINAMICOS COMENTARIO</p>
                                            <?php
                                            foreach ($parametros['comentarioDinamico'] as $key => $value) {
                                                ?>
                                                <legend><?=ucfirst($value['nombre'])?></legend>
                                                <p class="color-text"><?=ucfirst($value['valor'])?></p>
                                            <?php
                                            }
                                        }
                                    ?>
                                    
                                    </div>
                                </div>
                        </div>

                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <!-- <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp; -->
                        <button type="submit" name="actualizar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                </form>
            </div>

        </section>
    </main>


    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>