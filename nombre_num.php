<!DOCTYPE html>
<html>
<head>
	<title>Nombre de numeros</title>
</head>
<body>
<h1>Imptimir el nombre de un numero.</h1>

<script type="text/javascript">
	var numero = parseInt((Math.random()*4) + 1);

	document.write("El numero es: <strong>" + numero + " </strong> y en texto es: ");

	if (numero == 3){
		document.write("Tres");	
	} 
	else if(numero == 2){
		document.write("dos");
	}
	else if (numero == 1){
		document.write("uno");
	}
	else{
		document.write("ninguno de todos");	
	}
	

</script>

</body>
</html>