<!DOCTYPE html>
<html>
<head>
    <title>Formulario - Curriculum Vitae</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="index.php" method="POST" autocomplete="off">
        <h2>Bienvenido</h2>

        <div class = "input-group">

            <div class = "input-container">
                <input type = "text" name = "Name" placeholder="Apellidos y Nombres">
                <i class = "fa-solid fa-circle-user"> </i>
            </div>

            <div class = "input-container">
                <input type = "date" name = "Date" placeholder="Fecha de Nacimiento">
                <i class = "fa-solid fa-calendar-days"> </i>
            </div>

            <div class = "input-container">
                <input type = "text" name = "Ocupacion" placeholder="Ocupación">
                <i class = "fa-solid fa-house"> </i>
            </div>

            <div class = "input-container">
                <input type = "email" name = "Contacto" placeholder="Correo Electrónico">
                <i class = "fa-solid fa-envelope"> </i>
            </div>

            <div class = "input-container">
                <select name="Pais" placeholder="Ingrese su pais">
                    <option value="0" selected> --Selección--</option>
                    <option value="AF">Afganistán</option>
                    <option value="AL">Albania</option>
                    <option value="DE">Alemania</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antártida</option>
                    <option value="AG">Antigua y Barbuda</option>
                    <option value="AN">Antillas Holandesas</option>
                    <option value="SA">Arabia Saudí</option>
                    <option value="DZ">Argelia</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaiyán</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrein</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Bélgica</option>
                    <option value="BZ">Belice</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermudas</option>
                    <option value="BY">Bielorrusia</option>
                    <option value="MM">Birmania</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia y Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brasil</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="BT">Bután</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Camboya</option>
                    <option value="CM">Camerún</option>
                    <option value="CA">Canadá</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CY">Chipre</option>
                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comores</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, República Democrática del</option>
                    <option value="KR">Corea</option>
                    <option value="KP">Corea del Norte</option>
                    <option value="CI">Costa de Marfíl</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croacia (Hrvatska)</option>
                    <option value="CU">Cuba</option>
                    <option value="DK">Dinamarca</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egipto</option>
                    <option value="SV">El Salvador</option>
                    <option value="AE">Emiratos Árabes Unidos</option>
                    <option value="ER">Eritrea</option>
                    <option value="SI">Eslovenia</option>
                    <option value="ES">España</option>
                    <option value="US">Estados Unidos</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Etiopía</option>
                    <option value="FJ">Fiji</option>
                    <option value="PH">Filipinas</option>
                    <option value="FI">Finlandia</option>
                    <option value="FR">Francia</option>
                    <option value="GA">Gabón</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GD">Granada</option>
                    <option value="GR">Grecia</option>
                    <option value="GL">Groenlandia</option>
                    <option value="GP">Guadalupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GY">Guayana</option>
                    <option value="GF">Guayana Francesa</option>
                    <option value="GN">Guinea</option>
                    <option value="GQ">Guinea Ecuatorial</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="HT">Haití</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungría</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IQ">Irak</option>
                    <option value="IR">Irán</option>
                    <option value="IE">Irlanda</option>
                    <option value="BV">Isla Bouvet</option>
                    <option value="CX">Isla de Christmas</option>
                    <option value="IS">Islandia</option>
                    <option value="KY">Islas Caimán</option>
                    <option value="CK">Islas Cook</option>
                    <option value="CC">Islas de Cocos o Keeling</option>
                    <option value="FO">Islas Faroe</option>
                    <option value="HM">Islas Heard y McDonald</option>
                    <option value="FK">Islas Malvinas</option>
                    <option value="MP">Islas Marianas del Norte</option>
                    <option value="MH">Islas Marshall</option>
                    <option value="UM">Islas menores de Estados Unidos</option>
                    <option value="PW">Islas Palau</option>
                    <option value="SB">Islas Salomón</option>
                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                    <option value="TK">Islas Tokelau</option>
                    <option value="TC">Islas Turks y Caicos</option>
                    <option value="VI">Islas Vírgenes (EEUU)</option>
                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                    <option value="WF">Islas Wallis y Futuna</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italia</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japón</option>
                    <option value="JO">Jordania</option>
                    <option value="KZ">Kazajistán</option>
                    <option value="KE">Kenia</option>
                    <option value="KG">Kirguizistán</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="LA">Laos</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Letonia</option>
                    <option value="LB">Líbano</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libia</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lituania</option>
                    <option value="LU">Luxemburgo</option>
                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                    <option value="MG">Madagascar</option>
                    <option value="MY">Malasia</option>
                    <option value="MW">Malawi</option>
                    <option value="MV">Maldivas</option>
                    <option value="ML">Malí</option>
                    <option value="MT">Malta</option>
                    <option value="MA">Marruecos</option>
                    <option value="MQ">Martinica</option>
                    <option value="MU">Mauricio</option>
                    <option value="MR">Mauritania</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">México</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldavia</option>
                    <option value="MC">Mónaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mozambique</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Níger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk</option>
                    <option value="NO">Noruega</option>
                    <option value="NC">Nueva Caledonia</option>
                    <option value="NZ">Nueva Zelanda</option>
                    <option value="OM">Omán</option>
                    <option value="NL">Países Bajos</option>
                    <option value="PA">Panamá</option>
                    <option value="PG">Papúa Nueva Guinea</option>
                    <option value="PK">Paquistán</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Perú</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PF">Polinesia Francesa</option>
                    <option value="PL">Polonia</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="UK">Reino Unido</option>
                    <option value="CF">República Centroafricana</option>
                    <option value="CZ">República Checa</option>
                    <option value="ZA">República de Sudáfrica</option>
                    <option value="DO">República Dominicana</option>
                    <option value="SK">República Eslovaca</option>
                    <option value="RE">Reunión</option>
                    <option value="RW">Ruanda</option>
                    <option value="RO">Rumania</option>
                    <option value="RU">Rusia</option>
                    <option value="EH">Sahara Occidental</option>
                    <option value="KN">Saint Kitts y Nevis</option>
                    <option value="WS">Samoa</option>
                    <option value="AS">Samoa Americana</option>
                    <option value="SM">San Marino</option>
                    <option value="VC">San Vicente y Granadinas</option>
                    <option value="SH">Santa Helena</option>
                    <option value="LC">Santa Lucía</option>
                    <option value="ST">Santo Tomé y Príncipe</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leona</option>
                    <option value="SG">Singapur</option>
                    <option value="SY">Siria</option>
                    <option value="SO">Somalia</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PM">St Pierre y Miquelon</option>
                    <option value="SZ">Suazilandia</option>
                    <option value="SD">Sudán</option>
                    <option value="SE">Suecia</option>
                    <option value="CH">Suiza</option>
                    <option value="SR">Surinam</option>
                    <option value="TH">Tailandia</option>
                    <option value="TW">Taiwán</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TJ">Tayikistán</option>
                    <option value="TF">Territorios franceses del Sur</option>
                    <option value="TP">Timor Oriental</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad y Tobago</option>
                    <option value="TN">Túnez</option>
                    <option value="TM">Turkmenistán</option>
                    <option value="TR">Turquía</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UA">Ucrania</option>
                    <option value="UG">Uganda</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistán</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="YE">Yemen</option>
                    <option value="YU">Yugoslavia</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabue</option>
                    </select>
                <i class = "fa-solid fa-earth-americas"> </i>
            </div>

            <div class = "input-container">
                <br><h3>Nivel de Inglés:</h3> 
                <i class="fa-solid fa-language"></i> <br>
                Basico <input type = "radio" class = "myradio" name = "Nivel" value="Básico"> <br>
                Intermedio <input type = "radio" class = "myradio" name = "Nivel" value="Intermedio"> <br>
                Avanzado <input type = "radio" class = "myradio" name = "Nivel" value="Avanzado"> <br>
                Fluido <input type = "radio" class = "myradio" name = "Nivel" value="Fluido"> <br>
            </div>

            <div class = "input-container">
                <h3>Lenguages de Programación:</h3>
                Python
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="Python"> 
                C
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="C"> 
                C++
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="C++"> 
                C#
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="C#"> 
                Java
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="Java"> 
                JavaScript
                <input type = "checkbox" class = "mycheckbox" name = "Lenguage[]" value="JavaScript"> 
                <br> <br>
            </div>

            <div class = "input-container">
                <h3>Aptidudes:</h3>
                <input type="text" name = "Aptitudes" list="Aptitudes">
                    <datalist id="Aptitudes">
                        <option value="Trabajo en equipo"></option>
                        <option value="Ciberseguridad"></option>
                        <option value="Manejo de datos en la nube"></option>
                        <option value="Inteligencia artificial"></option>
                        <option value="Gestión de bases de datos"></option>
                        <option value="Redes"></option>
                        <option value="Identificación de fallos"></option>
                        <option value="Pensamiento analítico"></option>
                        <option value="Alto grado de autonomía"></option>
                    </datalist>
                    <br>
                <br>
            </div>

            <div class = "input-container">
                <h3>Habilidades:</h3>
                Creatividad
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Creatividad"> <br>
                Trabajo en Equipo
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Trabajo en Equipo"> <br>
                Alto Nivel Matemático
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Alto Nivel Matemático"> <br>
                Perseverancia
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Perseverancia"> <br>
                Abstracción
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Abstracción"> <br>
                Analisis y Pensamiento Crítico 
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Análisis y Pensamiento Crítico"> <br>
                Identificación de fallos
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Identificación de Fallos"> <br>
                Puntualidad y Buena Gestión de Tiempo
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Buena Gestión de tiempo"> <br>
                Alto Nivel de Adaptación
                <input type = "checkbox" class = "mycheckbox" name = "Hab[]" value="Alto Nivel de Adaptación"> <br>
                <br> <br>
            </div>
            
            <div class = "input-container">
                <h3>Perfil:</h3> <br>
                <textarea
                name="Perfil"
                rows="10"
                cols="40"
                maxlength = "420"></textarea>
            </div>

            <br>
            <input type="submit" name="send" class="btn" value="Enviar">

        </div>
    </form>

    <?php 
        include("send.php");
    ?>

</body>
</html>