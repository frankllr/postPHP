<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    <form method="POST" id="formulario">
        <label for="nombre" id="nombre"></label>
        <!-- <input type="text" id="nombre" name="nombre"><br> -->
        <label for="apellidop" id="apellidop"></label>
        <!-- <input type="text" id="apellidop" name="apellidop"><br> -->
        <label for="apellidom" id="apellidom"></label>
        <!-- <input type="text" id="apellidom" name="apellidom"><br> -->
        <br>
        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni"><br>
        <label for="dir">DIRECCION</label>
        <input type="text" id="dir" name="dir"><br>
        <label for="telf">TELEFONO</label>
        <input type="text" id="telf" name="telf"><br>
        <label for="obs">OBSERVACION</label>
        <input type="text" id="obs" name="obs"><br>
        <button type="submit" id="enviar">REGISTRAR</button>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
    //esto es lo que pusiste en tu ajax de consulta a reniec solo que es estatico, no lo copies
    $("#nombre").html("FRANK");
    $("#apellidop").html("LLUMPO");
    $("#apellidom").html("REQUE");

    //esto va despues del primer evento
    $("#enviar").click(function(event){
        $.ajax({
            type:"POST",
            url:"save.php",
            data:$("#formulario").serialize()+ "&nombre="+$("#nombre").html()+ "&apellidop="+$("#apellidop").html()+ "&apellidom="+$("#apellidom").html(),
            success: function(data){
                alert("Registró");
            },
            error: function(error){
                console.log(error)
            }
        });
    })
</script>
</html>