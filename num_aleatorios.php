<!DOCTYPE html>
<html>
<head>
	<title>Numero aleatorio</title>
</head>
<body>
<p>Adivina el numero</p>

<script type="text/javascript">
	var numero = parseInt(prompt("Ingresa un numero \n del 1 al 5"));
	
	var aleatorio =  parseInt(((Math.random() * 5) + 1));
	
	if (numero == aleatorio) {
		document.write("Felicidades adivinaste el numero <br>");

	}
	else{
		document.write("Haz Fallado<br><br>");
	}

	document.write("El numero oculto es: " + aleatorio + " \n El numero que ingresaste es: " + numero );
</script>

</body>
</html>