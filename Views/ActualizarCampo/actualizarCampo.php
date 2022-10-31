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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR CAMPO DINAMICO
                </h3>
                <p class="text-justify">
                    Revisa bien los cambios antes de guardar. ¡Gracias!
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                        <a href="<?= BASE_URL ?>agregarCampos"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CAMPOS DINAMICOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarCampos"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CAMPOS DINAMICOS</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->+
            <div class="container-fluid">
            
                <form action="<?= BASE_URL ?>actualizarCampo/updateCampo" class="form-neon" autocomplete="off" method="get">
                
                    <fieldset>
                        <legend><i class="fas fa-book"></i> &nbsp; Información</legend>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                    <input type="hidden" name="id" value="<?=$parametros['campos']['id']?>">
                                        <label for="titulo" class="bmd-label-floating">Nombre</label>
                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" value="<?=$parametros['campos']['nombre']?>" class="form-control" name="titulo" id="titulo" maxlength="27" required>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                        

                                        <label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1" <?= $parametros['campos']['activo'] == 1 ? 'checked': '' ?>>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <div class="form-outline">
                                            <label for="descripcion" id="label-textarea" class="bmd-label-floating">Los valores dentro de este campo tienen que estar separados por un pipe "|"</label>
                                            <textarea class="form-control" name="opciones" id="textAreaExample" cols="60" rows="10" required minlength="2"><?=$parametros['campos']['opciones']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
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