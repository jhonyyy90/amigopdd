<!DOCTYPE HTML>
<html>
    <head>
<meta charset="UTF-8">
        <title>Amigo Prevención del delito</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.css" />
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />
        <link rel="stylesheet" href="../css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
    <div data-role="page" data-theme='a'>
        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <h1>Solicitud de platicas de los programas</h1>
	            <a href="#menu" data-role='button' data-inline='false'><i class='lIcon fa fa-bars'></i></a>
        </div>
                
<!-- Menú -->
	<div data-role="panel" data-display="push" id="menu" data-theme="b">
       <ul data-role="listview">
            <li data-icon='false'><a href="../index.html"><i class='lIcon fa fa-home'></i>Inicio</a></li>
        </ul>    
	    <div data-role="collapsible" data-content-theme="b">
            <h4>Brigada de vigilanca animal</h4>
            <ul data-role="listview">
	            <li data-icon='false'><a href="../grafiti/ques.html"><i class='lIcon fa fa-angle-right'></i>¿Qué es?</a></li>
	            <li data-icon='false'><a href="#"><i class='lIcon fa fa-angle-right'></i>Denuncia</a></li>
            </ul>
        </div>
	    <div data-role="collapsible" data-content-theme="b">
            <h4>Grafiti</h4>
            <ul data-role="listview">
	            <li data-icon='false'><a href="../grafiti/ques.html"><i class='lIcon fa fa-angle-right'></i>¿Qué es?</a></li>
	            <li data-icon='false'><a href="../grafiti/donde.html"><i class='lIcon fa fa-angle-right'></i>¿Donde puedo verlos?</a></li>
	            <li data-icon='false'><a href="../grafiti/ins.php"><i class='lIcon fa fa-angle-right'></i>Inscribete</a></li>
	            <li data-icon='false'><a href="../grafiti/denuncia.php"><i class='lIcon fa fa-angle-right'></i>Denuncia</a></li>
            </ul>
        </div>
<ul data-role="listview">
            <li data-icon='false'><a href="../alc/"><i class='lIcon fa fa-bullhorn'></i>Conduce sin alcohol</a></li>
            <li data-icon='false'><a href="../sol/"><i class='lIcon fa fa-bullhorn'></i>Solicitud de platicas</a></li>
        </ul>
    </div>

<!-- End Menu -->
     <div data-role="content">   
	
        	
                
            <div class='inset'>
            <h2>¡Estamos certa de ti!</h2>
            <?php
			error_reporting(0);

				if($_REQUEST['flag']){
			?>
			<div class='message success'>
				<i class='fa fa-check'></i>
				  <p>Gracias por tu interes!</p>
                  <p>en breve te notificaremos cuando podremos asistir.</p>
				</div>            <?php
				}
			?>
            <form action="#" method="post" target="_self">
            <input type="hidden" name="flag" value="1">
               <ul data-role="listview" data-inset="true">
               <li data-role="fieldcontain">
                        <label for="select-choice-1b" class="select">Tipo de platica:</label>
                        <select name="select-choice-1" id="select-choice-1b" data-native-menu="true">
                            <option value="maltrato">Brigada animal</option>
                            <option value="abandono">Conduce sin alcohol</option>
                            <option value="esterilizacion">Plan de esterilización</option>
                            <option value="acopio">Graffiti</option>
                        </select>
                    </li>
                    <li><b>Dirección</b></li>
                  <li data-role="fieldcontain">
                        <label for="select-choice-1b" class="select">Delegación:</label>
                        <select name="select-choice-1" id="select-choice-1b" data-native-menu="true">
                            <option value="maltrato">Alvaro Obregon</option>
                            <option value="abandono">Azcapozalco</option>
                            <option value="esterilizacion">Benito Juarez</option>
                            <option value="acopio">Cuajimalpa de Morelos</option>
                            <option value="acopio">Coyoacán</option>
                            <option value="acopio">Cuauhtemoc</option>
                            <option value="acopio">Gustavo A. Madero</option>
                            <option value="acopio">Iztacalco</option>
                            <option value="acopio">Iztapalapa</option>
                            <option value="acopio">La Magdalena Contreras</option>
                            <option value="acopio">Miguel Hidalgo</option>
                            <option value="acopio">Milpa Alta</option>
                            <option value="acopio">Tláhuac</option>
                            <option value="acopio">Tlalpan</option>
                            <option value="acopio">Venustiano Carranza</option>
                            <option value="acopio">Xochimilco</option>
                        </select>
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Colonia:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Colonia">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Calle:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Calle">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Número:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Num">
                    </li> 
                    <li data-role="fieldcontain">
                        <label for="textarea2b">Referencias:</label>
                    <textarea cols="40" rows="8" name="textarea2" id="textarea2b" placeholder="Referencias"></textarea>
                    </li>    
                    <li><b>Datos del interesado</b></li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Nombre:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Nombre">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="select-choice-1b" class="select">Genero:</label>
                        <select name="select-choice-1" id="select-choice-1b" data-native-menu="true">
                            <option value="maltrato">Femenino</option>
                            <option value="abandono">Masculino</option>
                        </select>
                    </li>       
                    <li data-role="fieldcontain">
                        <label for="name2b">Edad:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Nombre">
                    </li>       
                    <li data-role="fieldcontain">
                        <label for="select-choice-1b" class="select">Escolaridad:</label>
                        <select name="select-choice-1" id="select-choice-1b" data-native-menu="true">
                            <option value="maltrato">Primaria</option>
                            <option value="abandono">Secundaria</option>
                            <option value="abandono">Preparatoria</option>
                            <option value="abandono">Universidad</option>
                            <option value="abandono">No Aplica</option>
                        </select>
                    </li>     
                    <li data-role="fieldcontain">
                        <label for="textarea2b">¿Porque quieres una platica?:</label>
                    <textarea cols="40" rows="8" name="textarea2" id="textarea2b" placeholder="Cuentanos algo de ti"></textarea>
                    </li>                     <li data-role="fieldcontain">
                        <label for="select-choice-1b" class="select">Delegación:</label>
                        <select name="select-choice-1" id="select-choice-1b" data-native-menu="true">
                            <option value="maltrato">Alvaro Obregon</option>
                            <option value="abandono">Azcapozalco</option>
                            <option value="esterilizacion">Benito Juarez</option>
                            <option value="acopio">Cuajimalpa de Morelos</option>
                            <option value="acopio">Coyoacán</option>
                            <option value="acopio">Cuauhtemoc</option>
                            <option value="acopio">Gustavo A. Madero</option>
                            <option value="acopio">Iztacalco</option>
                            <option value="acopio">Iztapalapa</option>
                            <option value="acopio">La Magdalena Contreras</option>
                            <option value="acopio">Miguel Hidalgo</option>
                            <option value="acopio">Milpa Alta</option>
                            <option value="acopio">Tláhuac</option>
                            <option value="acopio">Tlalpan</option>
                            <option value="acopio">Venustiano Carranza</option>
                            <option value="acopio">Xochimilco</option>
                        </select>
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Colonia:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Colonia">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Calle:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Calle">
                    </li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Número:</label>
                        <input type="text" name="name2" id="name2b" value="" data-clear-btn="true" placeholder="Num">
                    </li> 
                    <li><b>Anexos</b></li>
                    <li data-role="fieldcontain">
                        <label for="name2b">Video, imagenes, audio:</label>
                        <input type="file" name="adjunto" multiple/>
                    </li> 
                    <li><center>
							<button type="submit" data-inline='true'><i class='lIcon fa fa-check'></i>Enviar</button>
							<button type="reset" data-inline='true'><i class='lIcon fa fa-times'></i>Cancelar</button>
                             </center>
                    </li>             
                     </ul>
             </form>

            </div>

    

    </div>
    <div data-role='popup' id='seguimientoDenuncia' data-theme='a'>
        <div data-role='header' data-theme='b'>
          <h1>Ingrese su numero de folio</h1>
         </div>
       <form action="../grafiti/seguimiento.php" method="post">
         <div data-role='content' data-theme='a'>
          <label for="folio">Folio:</label>
          <input type="text" name="folio" id="folio" value="" data-clear-btn="true">
          <div class='showastabs center nobg'>
			<button type="submit" data-inline='true'><i class='lIcon fa fa-check'></i>Consultar</button>
           	<a href="../grafiti/dialog/index.html" data-rel="back" data-role="button" data-inline="true"><i class='lIcon fa fa-times'></i>Cerrar</a>

            </div>
          </div>
                </form>
    </div>
    <script src="../js/nativedroid.script.js"></script>
	<div data-position="fixed" data-tap-toggle="false" data-role="footer" data-tap-toggle="false" data-theme='b'>
			<div data-role="navbar">
			<ul>
					<li><a href="../grafiti/ques.html"><i class='blIcon fa fa-home'></i>¿Que es?</a></li>
					<li><a href="#"><i class='blIcon fa fa-bullhorn'></i>Denuncia</a></li>
					<li><a href="#seguimientoDenuncia" data-rel='popup' data-position-to='window' data-role='button' data-transition='pop' data-inline='true'><i class='blIcon fa fa-question'></i>Estatus denuncia</a></li>
				</ul>
			</div>
		</div>
    </body>
</html>
