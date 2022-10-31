 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&family=Vollkorn&display=swap" rel="stylesheet">

     <link rel="apple-touch-icon" sizes="57x57" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL ?>assets/img/iconos/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192" href="<?= BASE_URL ?>assets/img/iconos/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>assets/img/iconos/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="<?= BASE_URL ?>assets/img/iconos/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>assets/img/iconos/favicon-16x16.png">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">

     <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>
     <title>El Bardo Inmortal - Productos - </title>
 </head>

 <body class="fondo">

     <!-- Barra navegacion -->

     <header>


     <?php
    require_once ('Helpers/Helpers.php');

    ?>

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