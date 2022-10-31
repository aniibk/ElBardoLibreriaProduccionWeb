<?php
require_once 'Views/inc/header.php';
?>

<main class="fondo-portada reset">

    <section class="container">

        <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
            <h1 class="pt-5 titulo text-uppercase display-3">El Bardo Inmortal</h1>

            <blockquote class="blockquote">
                <p class="mb-0 text-white">"El hombre arruinado lee su condición en los ojos de los demás con tanta rapidez que él mismo siente su caída."</p>
                <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
            </blockquote>
        </div>
    </section>
<?php

?>

    <section>
        <div class=" col-lg-6 col-md-6 mx-auto mt-5 pb-5">
            <div class="alert alert-success" role="alert">
                <div class="text-center">
                
                    <h4 class="alert-heading"><?php if (isset($_POST['Nombre'])) {
                                                    echo "¡Muchas Gracias " . $_POST['Nombre']. "" . "!</h4>";
                                                    echo "<p>Llenaste correctamente el formulario y llego a nuestra casilla. Este fue el primer paso para resolver tus dudas...</p>";
                                                    echo "<hr>";
                                                    echo "<p>En breve nos pondremos en contacto con vos!</p>";
                                                } elseif (isset($_GET['insertNeswletter'])) {
                                                    echo "¡Muchas Gracias " . isset($_REQUEST['email']) ? $_REQUEST['email'] : "". "!</h4>";
                                                    echo "<p>Llenaste correctamente el formulario y llego a nuestra casilla. pronto te enviaremos las ultimas noticias</p>";
                                                } else {
                                                    echo "¡Muchas Gracias " . isset($_REQUEST['mail']) ? $_REQUEST['mail'] : "" . "!</h4>";
                                                    echo "<p>Llenaste correctamente el formulario y llego a nuestra casilla. Pronto publicaremos tu comentario</p>";
                                                } ?>

                        <hr>

                        <div class="d-flex justify-content-center">
                            <form class=" pr-2" action="<?= BASE_URL ?>home">
                                <button type="submit" class="btn btn-outline-dark" class="text-success">
                                    Volver a inicio</button>
                            </form>

                        </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php
require_once 'Views/inc/footer.php';
?>