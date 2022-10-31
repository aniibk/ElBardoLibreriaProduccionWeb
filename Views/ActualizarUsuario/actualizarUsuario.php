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
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR USUARIO
                </h3>
                <p class="text-justify">
                    Revisa bien todos los campos antes de guardar. ¡Gracias!
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?= BASE_URL ?>agregarUsuario"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>listarUsuarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>buscarUsuarios"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIOS</a>
                    </li>
                </ul>
            </div>

            <!-- Content here-->


            <div class="container-fluid">
            <form action="<?= BASE_URL ?>actualizarUsuario/updateUsuario" class="form-neon" autocomplete="off" method="post">
            <fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
                                <input type="hidden" name="idUsuario" value="<?=$parametros['usuario']['id']?>" id="idUsuario">

									<div class="form-group">
										<label for="dni" class="bmd-label-floating">DNI</label>
										<input type="text" pattern="[0-9-]{1,20}" class="form-control" value="<?=$parametros['usuario']['dni']?>" name="dni" id="usuario_dni" maxlength="20">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="nombre" class="bmd-label-floating">Nombres</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" value="<?=$parametros['usuario']['nombre']?>" name="nombre" id="usuario_nombre" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="apellido" class="bmd-label-floating">Apellidos</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" value="<?=$parametros['usuario']['apellidos']?>" name="apellido" id="usuario_apellido" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text" pattern="[0-9()+]{8,20}" class="form-control" value="<?=$parametros['usuario']['telefono']?>"value="<?=$parametros['usuario']['dni']?>" name="telefono" id="usuario_telefono" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" value="<?=$parametros['usuario']['direccion']?>" name="direccion" id="usuario_direccion" maxlength="190">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
						<div class="container-fluid">
							<div class="row">
								
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="email" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" value="<?=$parametros['usuario']['email']?>" name="email" id="usuario_email" maxlength="70">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<span>Estado de la cuenta  &nbsp; <span class="<?=$parametros['usuario']['activo'] == 1 ? "badge badge-success":"badge badge-danger"?>"><?= $parametros['usuario']['activo'] == 1 ? "Activa":"Desabilitada"?></span>
										<label for="activo" id="chklabel" class="bmd-label-floating pl-5">Activo</label>
                                        <input class="ml-3" type="checkbox" id="chkactivo" name="activo" value="1" <?= $parametros['usuario']['activo'] == 1 ? 'checked': '' ?>>
                                        
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend style="margin-top: 40px;"><i class="fas fa-lock"></i> &nbsp; Nueva contraseña</legend>
						<p>Para actualizar la contraseña de esta cuenta ingrese una nueva y vuelva a escribirla. En caso que no desee actualizarla debe dejar vacíos los dos campos de las contraseñas.</p>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_nueva_1" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="usuario_clave_nueva_1" id="usuario_clave_nueva_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_nueva_2" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" class="form-control" name="usuario_clave_nueva_2" id="usuario_clave_nueva_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<legend><i class="fas fa-medal"></i> &nbsp; Perfil Usuario</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<select class="form-control col-2" name="usuario_privilegio">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<?php
											if(isset($parametros['rol'])){
												foreach ($parametros['rol'] as $key => $value) {
													?>
													<option value="<?=$value['id'] ?>" <?=$parametros['usuario']['rol_id'] == $value['id'] ? "selected":""?>><?=ucfirst($value['nombre'])?></option>
													<?php
													
												}
											}
											?>
											
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<p class="text-center">Para poder guardar los cambios en esta cuenta debe de ingresar su nombre de usuario y contraseña</p>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_admin" class="bmd-label-floating">Nombre de usuario</label>
										<input type="email" class="form-control" name="usuario_admin" id="usuario_admin" maxlength="70" required="" >
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="clave_admin" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="clave_admin" id="clave_admin" pattern="[a-zA-Z0-9$@.-]{6,100}" maxlength="100" required="" >
									</div>
								</div>
                                <p class="text-danger ml-4 font-weight-bold"><?php if (isset($parametros['error']['usuario'])) {
                                    echo $parametros['error']['usuario'];
									
                                }?></p>
							</div>
						</div>
					</fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button> &nbsp; &nbsp;
                        <button type="submit" name="actualizar" value="1" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
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