<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>  
<html>
<head>



</head>

    
<body>

<div id="container">


   
        <img class="logo" src="<?php echo base_url()?>public/assets/img/logo.png" alt="">

   
	<h1><?php echo $title?></h1>
	<form action="<?php echo base_url()?>index.php/registro/save" method="POST" id="formulario">
        
    <div>
            <label for="email">Usuario</label>
            <input type="email" placeholder= "ingresa tu email" required name="email" id="email_id">
        </div>
        <div>
            <?php echo form_error('email')?>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" required name="nombre" id="nombre_id">
        </div>
        <div>
            <?php echo form_error('nombre')?>
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Apellido" required name="apellido" id="apellido_id">
        </div>
        <div>
            <?php echo form_error('apellido')?>
        </div>
        <div>
            <label for="clave">Clave</label>
            <input type="password" placeholder="Clave" required name="clave" id="clave_id">
        </div>
        <div>
            <?php echo form_error('password')?>
        </div>

          <label for="clave2">Confirmar Clave</label>
            <input type="password" placeholder="verifica tu contraseña" required  name="clave2" id="clave2_id">
        </div>
        <div>
            <?php echo form_error('password')?>
        </div>
        <input type="submit" value="Registrarse" class="enviar">
    </form>
</div>

</body>
</html>