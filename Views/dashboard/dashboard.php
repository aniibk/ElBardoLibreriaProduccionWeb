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
            <div class="">
                <h3 class="text-left">
                    <i class="fab fa-dashcube fa-fw"></i> &nbsp; Inicio
                </h3>
                
            </div>

            <!-- Content -->
            <div class="full-box tile-container">
                <a href="<?= BASE_URL ?>listarLibros" class="tile">
                    <div class="tile-tittle">Libros</div>
                    <div class="tile-icon">
                        <i class="fas fa-book fa-fw"></i>
                        <p>Registrados <?=$parametros['CantidadLibros']?></p>
                    </div>
                </a>

                <a href="<?= BASE_URL ?>listarEditorial" class="tile">
                    <div class="tile-tittle">Editoriales</div>
                    <div class="tile-icon">
                        <i class="fas fa-print fa-fw"></i>
                        <p>Registradas <?=$parametros['CantidadEditoriales']?></p>
                    </div>
                </a>

                <a href="<?= BASE_URL ?>listarGeneros" class="tile">
                    <div class="tile-tittle">Géneros</div>
                    <div class="tile-icon">
                        <i class="fas fa-theater-masks fa-fw"></i>
                        <p>Registrados <?=$parametros['CantidadGeneros']?></p>
                    </div>
                </a>
                <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                
                                ?>
                <a href="<?= BASE_URL ?>listarComentarios" class="tile">
                    <div class="tile-tittle">Comentarios</div>
                    <div class="tile-icon">
                        <i class="fas fa-comments fa-fw"></i>
                        <p>Registrados <?=$parametros['CantidadComentarios']?></p>
                    </div>
                </a>
                <a href="<?= BASE_URL ?>agregarCampos" class="tile">
                    <div class="tile-tittle">Campos Dinamicos</div>
                    <div class="tile-icon">
                    <i class="fas fa-pen-square"></i>
                        <p>Registrados <?=$parametros['CantidadCampos']?></p>
                    </div>
                </a>


                <a href="<?= BASE_URL ?>listarUsuarios" class="tile">
                    <div class="tile-tittle">Usuarios</div>
                    <div class="tile-icon">
                        <i class="fas fa-user-secret fa-fw"></i>
                        <p>Registrados <?=$parametros['CantidadUsuarios']?></p>
                    </div>
                </a>
                <a href="<?= BASE_URL ?>listarRoles" class="tile">
                    <div class="tile-tittle">Roles</div>
                    <div class="tile-icon">
                        <i class="fas fa-user-tag"></i>
                        <p>Registrados <?=$parametros['CantidadRoles']?></p>
                    </div>
                </a>
                <?php
                                }
                                
                                ?>
                
            </div>

        </section>
    </main>


    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
</body>

</html>