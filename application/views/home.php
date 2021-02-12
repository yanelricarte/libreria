<head>

</head>
<body>
	

<p class="titulo"><?php echo $titulo?></p>
<?php foreach($productos as $k => $v){?>
	<div><?php echo $v["nombre"]?></div>
	<div><a href="<?php echo base_url()?>index.php/productos/detalle/<?php echo $v["id"]?>">Ver Detalle</a></div>
<?php }?>
</body>