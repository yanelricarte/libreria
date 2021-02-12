<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>
<body>

<div id="container" class="form">
    <h1><?php echo $title?></h1>
	<form action="<?php echo base_url()?>index.php/login/saveAjaxJson" method="POST" id="formulario" onsubmit="loginJson(); return false;">
        <div>
            <label for="email">Usuario</label>
            <input type="text" name="email" id="email">
        </div>
        
        
        <div>
            <label for="clave">Clave</label>
            <input type="password" name="clave" id="clave">
        </div>
        
        <input type="submit" value="Ingresar" class="enviar">

        <?php echo $error?>
    </form>
    <div id="mensaje"></div>
</div>

</body>
</html>