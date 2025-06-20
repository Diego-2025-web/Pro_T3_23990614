<!-- Registro de usuarios en la web-->
<div class="container mt-5">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-light text-black">
                    <h2 class="mb-4 text-center ">Registro de Usuarios</h2>
                    
                    <?php $validation = \Config\services::validation();?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                	<?=csrf_field();?>
                	  <?=csrf_field();?>
                	  <?php if(!empty (session()->getFlashdata('fail'))):?>
                	  	<div class ="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                	  	<?php endif?>
                	  	<?php if(!empty (session()->getFlashdata('success'))):?>
                	  	<div class ="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                	  	<?php endif?>
                	  	              	
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre/s</label>
                            <input type="text" class="form-control" placeholder="nombre/s *" id="nombre" required>
             
                           <!--Error-->
                           <?php if($validation -> getError('nombre')) {?>
                                	<div class='alert alert-danger mt-2'>
                                	<?= $error = $validation->getError('nombre'); ?>
                                	</div>
                                	<?php }?>
                           
                            </div> 
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido/s</label>
                                <input type="text" class="form-control" placeholder="apellido/s *" id="apellido" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" placeholder="usuario *" id="usuario" required>
                            </div>
                           
                            <div class="col-md-4">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" placeholder="correo electrónico *" id="email" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder="contraseña *" id="contrasena" required>
                            </div>
                           <!-- <div class="d-flex justify-content-evenly">-->
                                <input type="submit" class="btn btn-success">Guardar</button>
                                <input type="reset" class="btn btn-danger">Cancelar</button>
                            <!--/div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del registro-->
