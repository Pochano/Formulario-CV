<?php


    $conex =mysqli_connect("localhost", "root", "", "formulario");

    if(isset($_POST['send'])){

        if(
            strlen($_POST['Name']) >= 1 && 
            strlen($_POST['Date']) >= 1 &&
            strlen($_POST['Ocupacion']) >= 1 &&
            strlen($_POST['Contacto']) >= 1 &&
            strlen($_POST['Pais']) >= 1 &&
            strlen($_POST['Nivel']) >= 1 && 
            strlen($_POST['Aptitudes']) >= 1 && 
            strlen($_POST['Perfil']) >= 1 
        ) {

            $name = $_POST['Name'];
            $Date = $_POST['Date'];
            $Ocupacion = $_POST['Ocupacion'];
            $Contacto =  $_POST['Contacto'];
            $Pais = ($_POST['Pais']);
            $Nivel_de_Ingles = ($_POST['Nivel']);
            $Lenguage = ($_POST['Lenguage']);
            $Lenguages = "";
            foreach($Lenguage as $row){
                $Lenguages .= $row . ", ";
            }
            $Aptitudes = ($_POST['Aptitudes']);
            $Habilidad = ($_POST['Hab']);
            $Habilidades = "";
            foreach($Habilidad AS $row){
                $Habilidades .= $row . ", ";
            }
            $Perfil = ($_POST['Perfil']);
            
            $consulta = "INSERT INTO datos(nombre, nacimiento, ocupacion, 
                                    contacto, pais, nivel_de_ingles,
                                    lenguage, aptitudes, habilidades,
                                    perfil)
                         VALUES ('$name', '$Date', '$Ocupacion', '$Contacto', '$Pais',
                        '$Nivel_de_Ingles', '$Lenguages', '$Aptitudes', '$Habilidades'
                        ,'$Perfil')";

            $resultado = mysqli_query($conex, $consulta);

            if($resultado){
                ?>
                    <h3 class="Success"> Tu registro se ha completado </h3>
                <?php
            }

            else{
                ?>
                    <h3 class="Error"> Ocurrio un error </h3>
                <?php
            }


        }

        else{
            ?>
            <h3 class="Error"> Llena todos los campos </h3>
            <?php
        }

    }
?>
