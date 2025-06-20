<!-- Registro de usuarios en la web-->
<div class="container mt-5">
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-light text-black">
                    <h2 class="mb-4 text-center ">Registro de Usuarioss</h2>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre/s</label>
                            <input type="text" class="form-control" placeholder="nombre/s *" id="nombre" required>
                              <!--Error-->
                            
                                <div class='alert alert-danger'>     	
                          			<?php echo $'nombre' ?>
                                </div>
                           
                        </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido/s</label>
                                <input type="text" class="form-control" placeholder="apellido/s *" id="apellido" required>
                            </div>
                        </div>
                        <div class="row md-6">  
                            <div class="col-md-6">
                                <label for="usuario" class="form-label"> Usuario</label>
                                <input type="text" class="form-control" placeholder="ingrese su usuario *" id="usuario" required>
                            </div>
                         
                            <div class="col-md-6">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" placeholder="correo electrónico *" id="email" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder="contraseña *" id="contrasena" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del registro-->
