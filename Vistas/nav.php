<!DOCTYPE html>
<html>
<?php if(!isset($_SESSION['Rol'])){ ?>


<nav class="navbar navbar-toggleable-md  navbar-light" style="background-color:  #e8daef ;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
         <a class="navbar-brand text-info"  href="/Vista/Index">
            <img  src="<?= FRONT_ROOT ?>/Vistas/img/log.svg" width="35" height="35" alt=""> Mercado Birra
         </a>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>Vista/Login">Ingresar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>Vista/VistaCervezas">Nuestras Cervezas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>Vista/VistaSucursales">Sucursales</a>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     <!--  <li><a href="<?=FRONT?>TipoCerveza/cerrar" ><span class="glyphicon glyphicon-log-in"></span> Cerrar sesion</a></li> -->
    <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
                <div class="modal-body">
                  <form method="POST" action="<?=FRONT?>GestionClientes/Nuevo" class="form-signin">
                    <div class="form-group">
                      <label for="Nombre">Nombre:</label>
                      <input type="text" id="inputNombreCte" class="form-control form-format" placeholder="Nombre" name="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="Domicilio">Domicilio:</label>
                      <input type="text" id="inputDomicilio" class="form-control form-format" placeholder="Domicilio" name="Domicilio" required>
                    </div>
                    <div class="form-group">
                      <label for="Telefono">Telefono:</label>
                      <input type="text" id="inputTelefono" class="form-control form-format" placeholder="Telefono" name="Telefono" required>
                    </div>
                     <div class="form-group">
                      <label for="Email">Email:</label>
                      <input type="text" id="inputEmail" class="form-control form-format" placeholder="Email" name="Email" required>
                    </div>
                  <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Aceptar">
                   Aceptar
                </button>
                  </form>
                </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
            </div>
          </div>
        </div>
    </ul>
<!-- <form class="form-inline my-2 my-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> -->
  </form>
  </div>
</nav>

<?php } elseif ($_SESSION['Rol'] == 'admin') {?>

<nav class="navbar navbar-toggleable-md  navbar-light" style="background-color:  #e8daef ;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     
         <a class="navbar-brand text-info"  href="<?=FRONT?>Vista/Index">
            <img  src="<?= FRONT_ROOT ?>/Vistas/img/log.svg" width="35" height="35" alt=""> Mercado Birra
         </a>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>TipoSucursales/gestionSucursales">Sucursales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>TipoEnvase/gestionEnvases">Envases</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=FRONT?>TipoCerveza/gestionCervezas">Cervezas</a>
    </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?=FRONT?>TipoUsuario/cerrar" ><span class="glyphicon gly"></span> Cerrar sesion</a>
      
    </ul>
<!-- <form class="form-inline my-2 my-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> -->
  </form>
  </div>
</nav>

<?php }else{ ?>
<nav class="navbar navbar-toggleable-md  navbar-light" style="background-color:  #e8daef ;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
         <a class="navbar-brand text-info"  href="<?=FRONT?>Vista/Index">
            <img  src="<?= FRONT_ROOT ?>/Vistas/img/log.svg" width="35" height="35" alt=""> Mercado Birra
         </a>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>Vista/VistaCervezas">Nuestras Cervezas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=FRONT?>Vista/VistaSucursales">Sucursales</a>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=FRONT?>TipoUsuario/cerrar" ><span class="glyphicon glyphicon-log-in"></span> Cerrar sesion</a>
    </ul>
<!-- <form class="form-inline my-2 my-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> -->
  </form>
  </div>
</nav>
<?php } ?>
