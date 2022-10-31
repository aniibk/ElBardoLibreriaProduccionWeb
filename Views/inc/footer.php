<footer>
        <div class="p-3  fondofooter text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <h4>Producción web</h4>
                        <h5>Integrantes Grupo X</h5>
                        <p>Calleja Horácio<br> Kim Anastasia <br> Kukuchka Marcos Jeremias <br> Lopez Sosa Sebastian Gabriel</p>
                        <h6>Repositorio</h6>
                        <a href="https://github.com/marcoskukuchka/produccion_web_el_bardo" target="_blank"><i class="fab fa-github"> </i> GitHub </a>
                    </div>

                    <div class="col-sm text-center">
                        <h4>Recibi las novedades</h4>

                        <form class="mi-form" action="<?=BASE_URL?>gracias" method="GET">
                            <div class="form-group">
                                <label for="inputAddress"></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Direccion de email">
                                <input type="hidden" disable="disable" class="form-control" name="insertNeswletter"
                                value=1 id="insertNeswletter">
                                <small id="emailHelp" class="form-text text-muted">No vamos a compartir tu email con nadie.</small>
                            </div>

                            <button id="modal" class="mb-2 btn-block btn-warning" class="btn btn-primary">Quiero suscribirme</button>

                            <div id="tvesModal" class="modalContainer">
                                <div class="modal-content">
                                    <button id="cerrar" class="close">×</button>
                                    <h2>Gracias!</h2>
                                    <p>Ya te suscribiste!</p>
                                </div>
                            </div>



                        </form>
                    </div>


                    <div class="col-sm text-center">
                        <h5>En cada minuto hay muchos días, aprovechalos con un libro</h5>
                        <p>El Bardo inmortal es una libreria donde podes encontrar todo lo que quieras leer... si no lo tenemos, ¡te lo conseguimos!</p>

                        <h6>Seguinos en las redes sociales</h6>
                        <ul class="justify-content-center list-group list-group-horizontal redes ">

                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.facebook.com/" target="new">
                                    <i class="fab fa-facebook-f"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.twitter.com/" target="new">
                                    <i class="fab fa-twitter"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.instagram.com/" target="new">
                                    <i class="fab fa-instagram"></i>

                                </a>
                            </li>
                            <li class="list-group-item fondofooter border-0">
                                <a href="https://www.youtube.com.ar/" target="new">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="text-center">
                <p><strong> Escuela de Arte Multimedial Da Vinci - Asbn - Tercer Cuatrimestre - Año 2021</strong></p>

            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type='text/javascript' src="<?=BASE_URL?>Assets/js/main.js"></script>
    <script type='text/javascript' src="<?=BASE_URL?>Views/inc/func/func.js"> </script>
    </body>

    </html>