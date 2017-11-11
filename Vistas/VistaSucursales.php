<!DOCTYPE html>
<html>
<body>
		<div class="container-fluid">
			<h1 class="text-center">Estos son Nuestras Sucursales</h1>
			<div class="row">
				<div class="col-3">
        			
        				<div class="card border-info text-center bg-light">
                  <h4 class="card-header">
  	 <?php echo $sucursal->getUbicacion() ?>
                  </h4>
  						<img class="card-img-top" src="<?php echo $sucursal->getFoto() ?>" width="278" height="135" alt="Card image cap">
  						<div class="card-body">
   					<h4 class="card-title"><?php echo $sucursal->getNombre() ?> </h4>
    				<p class="card-text"><?php echo $sucursal->getDescripcion() ?></p>
    				<a href="#" class="btn btn-primary">Como Llegar</a>
  						</div>
  						</div>
  				</div>
  				<div class="col-3">
        			
        				<div class="card">
  						<img class="card-img-top" width="278" height="135" src="<?= FRONT_ROOT ?>/Vistas/img/default.png" alt="Card image cap">
  						<div class="card-body">
   					<h4 class="card-title">Card title</h4>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  						</div>
  						</div>
  				</div>
  				<div class="col-3">
        		
        				<div class="card" >
  						<img class="card-img-top" src="/Vistas/img/default.png " alt="Card image cap">
  						<div class="card-body">
   					<h4 class="card-title">Card title</h4>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  						</div>
  						</div>
  				</div>
  				<div class="col-3">
        			
        				<div class="card" >
  						<img class="card-img-top" src="..." alt="Card image cap">
  						<div class="card-body">
   					<h4 class="card-title">Card title</h4>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				<a href="#" class="btn btn-primary">Go somewhere</a>
  						</div>
  						</div>
              				</div>
  			</div>
  		</div>

</body>
