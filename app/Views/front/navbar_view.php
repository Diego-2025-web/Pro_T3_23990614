<!--Navegación-->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
    	<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
    		<!--logo marca de la empresa -->
    			<img src="<?php echo base_url('assets/img/home.jpg')?>" alt="marca" width="75"
    			 height="30" class="img-fluid"/>
		 </a>
	 </div> 
   </nav>
<nav class="navbar navbar-expand-md navbar-light bg-light">
	 <!--<a class="navbar-brand" href="#">Navegación</a>-->
	  <button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
	  <div class="collapse navbar-collapse" 
             id="navbarSupportedContent1">
           <!-- <ul class="navbar-nav mr-auto">-->
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <!-- <li class="nav-item active">
                    <a class="nav-item nav-link active" 
                      <href="principal">Inicio 
                    <span class="sr-only"> (actual)</span></a>
                </li>-->
                <li class="nav-item">
                <a class="nav-link active" href="principal">Inicio</a>
            </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="quienes_somos">Sobre nosotros</a>
      
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="catalogo">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro">Formulario de registro</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            </ul>
        </div>
	</nav>

</div>
</div>
</div>

<!--Fin Navegación-->
