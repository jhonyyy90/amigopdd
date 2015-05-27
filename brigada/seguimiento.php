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
            <h1>Brigada de vigilancia animal</h1>
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
	            <li data-icon='false'><a href="#"><i class='lIcon fa fa-angle-right'></i>¿Qué es?</a></li>
	            <li data-icon='false'><a href="denuncia.php"><i class='lIcon fa fa-angle-right'></i>Denuncia</a></li>
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
			<h1>Seguimiento de denuncias</h1>
            	
            <p>El fólio <b><?php echo $_REQUEST['folio'];?></b> se encuentra acualmente en proceso de atención. Cualquier cambio de estatus, o requerimiento de mayor información será notificado.</p>
            <p></p>
            <p>¡Gracias!</p>
            </div>

    

    </div>

    <script src="../js/nativedroid.script.js"></script>
	<div data-position="fixed" data-tap-toggle="false" data-role="footer" data-tap-toggle="false" data-theme='b'>
			<div data-role="navbar">
				<ul>
					<li><a href="ques.html"><i class='blIcon fa fa-home'></i>¿Que es?</a></li>
					<li><a href="denuncia.php"><i class='blIcon fa fa-bullhorn'></i>Denuncia</a></li>
					<li><a href="#" data-rel='popup' data-position-to='window' data-role='button' data-transition='pop' data-inline='true'><i class='blIcon fa fa-question'></i>Estatus denuncia</a></li>
				</ul>
			</div>
		</div>
    </body>
</html>
