<?php
include("template/cabecera.php");
?>

<div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-3"> Bienvenido <?php echo $nombreUsuario;?></h1>
        <p class="lead"> Vamos a administrar nuestros cursos mi pana </p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/cursos.php" role="button"> Administrar cursos </a>
        </p>
    </div>
</div>   
        
<?php
include("template/pie.php");
?>
  