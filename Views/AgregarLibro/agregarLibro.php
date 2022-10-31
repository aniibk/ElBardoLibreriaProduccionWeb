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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LIBRO
                </h3>
                <p class="text-justify">
                    Revisa bien la Información que cargas. No te olvides de marcar que está activo y si es Destacado.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="<?= BASE_URL ?>agregarlibro"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LIBRO</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarlibros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LIBROS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarLibro"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR LIBRO</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->
            <div class="container-fluid">
                <form action="<?= BASE_URL ?>agregarLibro/insertaLibro" class="form-neon" autocomplete="off" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend><i class="fas fa-book"></i> &nbsp; Información</legend>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="titulo" class="bmd-label-floating">Titulo</label>
                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="titulo" id="titulo" maxlength="27" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="precio" class="bmd-label-floating">Precio</label>
                                        <input type="text" pattern="[0-9.]+[^,]{1,3}" class="form-control" name="precio" id="precio" maxlength="40" required>
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="editorial" class="bmd-label-floating">Editorial</label>
                                        <select class="form-control" name="editorial" id="editorial" required>
                                            <option value="" selected="" disabled="">Seleccione una Editorial</option>
                                            <?php 
                                                foreach ($parametros['editoriales'] as $key => $value) {
                                                    ?>
                                                    <option value="<?=$value['id']?>"><?=ucfirst($value['nombre'])?></option>
                                                    <?php
                                                    
                                                }
                                            
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="genero" class="bmd-label-floating">Género</label>
                                        <select class="form-control" name="genero" id="genero" required>
                                            <option value="" selected="" disabled="">Seleccione un Género</option>
                                            <?php 
                                                foreach ($parametros['generos'] as $key => $value) {
                                                    ?>
                                                    <option value="<?=$value['id']?>"><?=ucfirst($value['nombre'])?></option>
                                                    <?php
                                                    
                                                }
                                            
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group pt-4 pl-4">
                                        <label for="destacado" class="bmd-label-floating">Destacado</label>
                                        <input type="checkbox" class="ml-3" id="chkdestacado" name="destacado" value="1">

                                        <label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <div class="form-outline">
                                            <label for="descripcion" id="label-textarea" class="bmd-label-floating">Detalle</label>
                                            <textarea class="form-control" name="descripcion" id="textAreaExample" cols="60" rows="10" required minlength="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pt-4">
                                    <div class="form-group col-sm-8 col-md-12 col-lg-6">
                                        <div class="form-group d-flex flex-column">
                                            <label for="portada" id="label-portada" class="bmd-label-floating ">Imagen de portada</label>
                                            <!-- <input type="hidden" name="portada" /> -->
                                            <input type="file" name="imágenes[]" required />
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label for="banenr" id="label-banner" class="bmd-label-floating">Banner</label>
                                            <!-- <input type="hidden" name="banner" /> -->
                                            <input type="file" name="imágenes[]" required/>

                                        </div>

                                    </div>
                                </div>

                            </div>

                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="insertar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
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