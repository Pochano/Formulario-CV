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

            echo "<table>";
            echo "<tr>";
            echo "<th><h1>id</th></h1>";
            echo "<th><h1>Nombre</th></h1>";
            echo "<th><h1>Usuario</th></h1>";
            echo "<th><h1>Contraseña</th></h1>";
            echo "</tr>";
            while ($colum = mysqli_fetch_array($resultado))
                echo "<tr>";
                echo "<td><h2>" . $colum['id']. "</td></h2>";
                echo "<td><h2>" . $colum['nombre']. "</td></h2>";
                echo "<td><h2>" . $colum['nacimiento'] . "</td></h2>";
                echo "<td><h2>" . $colum['ocupacion'] . "</td></h2>";
                echo "<td><h2>" . $colum['pais'] . "</td></h2>";
                echo "<td><h2>" . $colum['nivel_de_ingles'] . "</td></h2>";
                echo "<td><h2>" . $colum['aptitudes'] . "</td></h2>";
                echo "<td><h2>" . $colum['lenguage'] . "</td></h2>";
                echo "<td><h2>" . $colum['Habilidades'] . "</td></h2>";
                echo "</tr>";
            }
            echo "</table>";

        }

        else{
            ?>
            <h3 class="Error"> Llena todos los campos </h3>
            <?php
        }


?>
