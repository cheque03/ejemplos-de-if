<!DOCTYPE html>
<html>
<head>
	<title>N digitos</title>
</head>
<body>
<h1>Escribir el numero de digitos de una cantidad </h1><br>

<script type="text/javascript">
	var numero =  parseInt((Math.random() * 100) + 1);
	
	document.write("Numero aleatorio: " + numero + "<br>");

	if (numero < 9) {
		document.write(" tiene un digito");
	}
	else{
		if (numero >= 10 && numero < 100) {
			document.write("<p>es de dos digitos</p>")
		}
		else{
			document.write("es de tres digitos")
		}
	}
</script>

</body>
</html>