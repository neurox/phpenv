<!DOCTYPE html>
<html>
<meta lang="es">
<head>
	<title>Vagrant VM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
	        <h1 class="titulo"><?php echo "Hello ".(isset($_GET['name']) ? $_GET['name'] : "World"); ?><br>
	            Bienvenido a Vagrant VM<br>
	            <span class="subtitulo">Mi primer sitio</span>
	        </h1>
	    </div>
    </div>
</body>
</html>