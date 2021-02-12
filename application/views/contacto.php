<head>

</head>
<form  name="contacto_form" onsubmit="contactarse(); return false">
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre_id">
        <div id="error_nombre"></div>
    </div>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido_id">
    </div>
    <div>
        <label for="">Email</label>
        <input type="text" name="email" id="email_id">
    </div>
    <div>
        <label for="">Consulta</label>
        <textarea name="consulta" id="consulta_id" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="checkbox" name="soy_alumno" id="soy_alumno">Soy Alumno
    </div>
    <div class="texto_alumno">
        En caso de ser alumno comiquese con ...
    </div>
    <input type="submit" value="Contactarse" class="enviar">
</form>


