<?php
        $conexion = mysqli_connect("127.0.0.1","user","password","nombreBD",3306);

        if ($conexion) {
            $dni = $_POST['dni'];
            $nombre = $_POST["nombre"];
            $apellidop = $_POST["apellidop"];
            $apellidom = $_POST["apellidom"];
            $dir = $_POST["dir"];
            $telf = $_POST["telf"];
            $ticket = "ticket";
            $cuad = 1;
            $obs = $_POST["obs"];
            $fr = strftime("%Y-%m-%d %H:%M:%S", time());
            $usr = 3;

            $query = "insert into persona (dni,nombre,apellidop,apellidom,dir,telf,ticket,cuad,obs,fr,usr) values (".$dni.",'".$nombre."','".$apellidop."','".$apellidom."','".$dir."',".$telf.",'".$ticket."',".$cuad.",'".$obs."','".$fr."',".$usr.");";
            $stmt = mysqli_query($conexion,$query);
            if ($stmt) {
                echo "cargo";
            }else{
                echo $query;
            }
        }else{
            echo "no hay conexion a bd";
        }
        
    // }
?>