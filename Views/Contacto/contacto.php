<?php
require_once 'Views/inc/header.php';
?>
<!-- fin nav -->

<main class="fondo-portada">

  <section class="container">

    <!-- identidad sitio -->

    <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
      <h1 class="pt-5 titulo text-uppercase display-3">El Bardo Inmortal</h1>

      <blockquote class="blockquote">
        <p class="mb-0 text-white">"Presta el oído a todos, y a pocos la voz. Escucha las censuras de los demás; pero reserva tu propia opinión."</p>
        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
      </blockquote>
    </div>
  </section>

  <section>
    <div class="container col-lg-6 mt-5 pt-5 pb-5">
      <h2 class="text-uppercase display-4 text-white sombra">Contactenos</h2>


      <form action="<?= BASE_URL ?>gracias" id="formcontacto" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label class="colorlbl" for="Nombre">Nombre:</label>
            <input type="Nombre" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-6">
            <label class="colorlbl" for="inputapellido">Apellido:</label>
            <input type="apellido" class="form-control" name="Apellido" id="apellido" placeholder="Apellido">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6 ">
            <label class="colorlbl" for="inputAddress">E-mail:</label>
            <input type="email" class="form-control" name="mail" id="email" placeholder="Direccion de email">
          </div>

          <div class="form-group col-md-6">
            <label class="colorlbl" for="Telefono">Teléfono:</label>
            <input type="number" class="form-control" name='telefono' id="Telefono" placeholder="Telefono" max="99999999999999">
          </div>
        </div>


        <div class="form-row">
          <div class="col-md-6">
            <label class="colorlbl" for="Asunto"></label>
            <input type="Asunto" class="form-control" name="Asunto" id="Asunto" placeholder="Asunto">
          </div>
          <div class="col-md-6">

            <label class="colorlbl" for="Asunto"><span></span></label>
            <select class="custom-select" id="Area" name="Area">

              <option selected disabled value="">Para:</option>

              <?php

              foreach ($parametros as $valores) :
                echo '<option value="' . $valores["sector"] . '"> '.$valores["sector"].'</option>';
              endforeach;

              ?>

            </select>

           
          </div>
        </div>
        <div class="form-group pt-3">
          <label class="colorlbl" for="Mensaje">Mensaje:</label>
          <textarea class="form-control" id="Mensaje" name="Mensaje" rows="6" min="50"></textarea>
        </div>

        <div class="">
          <button type="reset" class="btn btn-secondary mr-3" action="<?= BASE_URL ?>gracias"> Limpiar</button>
          <button type="submit" class="btn btn-warning" id="Enviar"> Enviar</button>
        </div>
      </form>


    </div>

  </section>
  <script>
    window.onload = function() {
      document.getElementById("formcontacto").addEventListener('submit', validarFormulario);
    };
  </script>

</main>



<!-- footer  -->
<?php
require_once 'Views/inc/footer.php';
?>