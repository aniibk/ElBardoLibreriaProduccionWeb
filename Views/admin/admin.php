<!DOCTYPE html>
<html lang="es">

<?php 
require_once 'Views/inc/crm/crmHead.php';

?>

<header>
<nav class="container-fluid navbar navbar-icon-top navbar-expand-lg navbar-dark fondonav fixed-top">
             <a id="marca" class="navbar-brand ml-5" href="<?= BASE_URL ?>"><img class="img-fluid logos" src="<?= BASE_URL ?>assets/img/path2925.png" alt="logo libreria"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
                 <ul class="navbar-nav">
                     <li class="nav-item <?php Activo('home') ?>">
                         <a class="nav-link" href="<?= BASE_URL ?>home"><i class="fas fa-home mr-2"></i>Inicio</a>
                     </li>
                     <li class="nav-item <?php Activo('libros') ?>">
                         <a class="nav-link" href="<?= BASE_URL ?>libros"><i class="fas fa-book mr-2"></i>Libros</a>
                     </li>
                     <li class="nav-item <?php Activo('contacto') ?>">
                         <a class="nav-link" href="<?= BASE_URL ?>contacto"><i class="fas fa-address-book mr-2"></i>Contactos</a>
                     </li>
                 </ul>
             </div>
         </nav>
         </header>

<body>

    <div class="login-container">
        <div class="login-content">
            <p class="text-center">
                <i class="fas fa-user-circle fa-5x icono-portada"></i>
            </p>
            <p class="text-center">
                Inicia sesión con tu cuenta
            </p>
            <form action="#" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
                    <input type="email" class="form-control" id="UserName" name="usuario"  maxlength="70" required="">
                </div>
                <div class="form-group">
                    <label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
                    <input type="password" class="form-control" id="UserPassword" name="clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="">
                </div>
                <p class="text-danger ml-4 font-weight-bold"><?php if (isset($parametros['error']['usuario'])) {
                                    echo $parametros['error']['usuario'];
									
                                }?></p>
                <button type="submit" class="btn-login text-center">LOG IN</button>
            </form>
        </div>
    </div>
    <?php 
    require_once 'Views/inc/crm/crmFooter.php';
    ?>
   
</body>

</html>