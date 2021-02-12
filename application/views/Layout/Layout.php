<!DOCTYPE html>
<html>
<head>
    <?php echo $titulo?>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>public/assets/js/script.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<ul class="menu">
  <li><a href="<?php echo base_url();?>index.php/registro">Registro</a></li>
  <li><a href="<?php echo base_url();?>index.php/login">Login</a></li>
  <li><a href="<?php echo base_url();?>index.php/contacto">Contacto</a></li>

</ul>

<?php echo $contenido?>

</body>
</html>
