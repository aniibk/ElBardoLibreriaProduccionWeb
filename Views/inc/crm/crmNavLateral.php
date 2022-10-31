<section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="<?= BASE_URL.$_SESSION['usuario']['imagen'] ?>" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                    <?=$_SESSION['usuario']['nombre']?><br><small class="roboto-condensed-light"><?=ucfirst($_SESSION['usuario']['nombreRol'])?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="<?= BASE_URL ?>dashboard"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Inicio</a>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-book fa-fw"></i> &nbsp; Libros <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                
                                ?>
                                <li>
                                    <a href="<?= BASE_URL ?>agregarLibro"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Libros</a>
                                </li>
                                <?php
                                }
                                
                                ?>
                                
                                <li>
                                    <a href="<?= BASE_URL ?>listarlibros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Libros</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL ?>buscarLibro"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Libros</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-print fa-fw"></i> &nbsp; Editoriales <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                
                                ?>
                                <li>
                                    <a href="<?= BASE_URL ?>agregarEditorial"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Editorial</a>
                                </li>
                                <?php
                                }
                                
                                ?>
                                <li>
                                    <a href="<?= BASE_URL ?>listarEditorial"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Editoriales</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL ?>buscarEditorial"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Editoriales</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-theater-masks fa-fw"></i> &nbsp; Generos <i class="fas fa-chevron-down"></i></a>
                            <ul>
                            <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                
                                ?>
                                <li>
                                    <a href="<?= BASE_URL ?>AgregarGenero"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Genero</a>
                                </li>
                                <?php
                                }
                                
                                ?>
                                <li>
                                    <a href="<?= BASE_URL ?>listarGeneros"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Generos</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL ?>BuscarGenero"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Generos</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                                if ($_SESSION['usuario']['nivel']>3) {
                                
                                ?>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-comments fa-fw"></i> &nbsp; Comentarios <i class="fas fa-chevron-down"></i></a>
                            <ul>
                               
                                <li>
                                    <a href="<?= BASE_URL ?>listarComentarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Comentarios</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL ?>buscarComentario"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Comentarios</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pen-square"></i> &nbsp; Alta Campos Dinamicos <i class="fas fa-chevron-down"></i></a>
                            <ul>
                               
                                <li>
                                    <a href="<?= BASE_URL ?>agregarCampos"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Campo Producto</a>
                                </li>
                                <li>
                                    <a href="<?= BASE_URL ?>listarCampos"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Campos Dinamicos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="<?= BASE_URL ?>agregarUsuario"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="<?= BASE_URL ?>listarUsuarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="<?= BASE_URL ?>buscarUsuarios"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-user-tag"></i> &nbsp; Roles <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="<?= BASE_URL ?>agregarRol"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo rol</a>
								</li>
								<li>
									<a href="<?= BASE_URL ?>listarRoles"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de roles</a>
								</li>
							</ul>
						</li>
                        <?php
                                }
                                
                                ?>
                        <li>
                            <a href="<?= BASE_URL ?>"><i class="fas fa-store-alt fa-fw"></i> &nbsp; El Bardo Inmortal</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>