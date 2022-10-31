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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR GÉNERO
                </h3>
                <p class="text-justify">
                     Una vez que ingreses el nuevo género recordá activarlo.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="<?= BASE_URL ?>agregarGenero"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR GÉNERO</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarGeneros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE GÉNEROS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarGenero"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR GÉNERO</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->
            <div class="container-fluid">
                <form action="<?= BASE_URL ?>agregarGenero/creaGenero" class="form-neon" autocomplete="off" method="get">
                    <fieldset>
                        <legend><i class="fas fa-book"></i> &nbsp; Información</legend>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="titulo" class="bmd-label-floating">Nombre</label>
                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="titulo" id="titulo" maxlength="27" required>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                        

                                        <label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1">
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="agregar" value="TRUE" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
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