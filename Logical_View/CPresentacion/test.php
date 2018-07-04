<?php
	echo "<html >";
	echo "<head>";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">";
	echo "</head>";
	echo "<body >";
	echo "<br>";
	echo "<h1 align=\"center\"><b>Lista de Productos</b></h1>";
	echo "<br>";
	echo "<div  align=\"center\" class=\"wrapper\">";
	echo "<button onclick=\"genera_tabla()\"><b>Actualizar</b></button>";
	echo "</div>";
	echo "<br>";
	echo "<br>";
	echo "</body >";
	echo "<script>";
	echo "function genera_tabla() {";
	echo "var tabla_ant   = document.getElementsByTagName(\"table\")[0];";
	echo "	if(tabla_ant!=null){";
	echo "		tabla_ant.remove();";
	echo "	}";
	echo "	var body = document.getElementsByTagName(\"body\")[0];";
	echo "	var tabla   = document.createElement(\"table\");";
	echo "	var tblBody = document.createElement(\"tbody\");";
	echo "var cabecera = document.createElement(\"tr\");";
	echo "var c1 = document.createElement(\"th\");";
	echo "var c2 = document.createElement(\"th\");";
	echo "var c3 = document.createElement(\"th\");";
	echo "var c4 = document.createElement(\"th\");";
	echo "var c5 = document.createElement(\"th\");";
	echo "var c6 = document.createElement(\"th\");";
	echo "var c7 = document.createElement(\"th\");";
	echo "var t1 = document.createTextNode(\"Id Producto\");";
	echo "var t2 = document.createTextNode(\"Nombre\");";
	echo "var t3 = document.createTextNode(\"Descripcion\");";
	echo "var t4 = document.createTextNode(\"Peso\");";
	echo "var t5 = document.createTextNode(\"Stock\");";
	echo "var t6 = document.createTextNode(\"Precio\");";
	echo "var t7 = document.createTextNode(\"Limite\");";
	echo "c1.appendChild(t1);";
	echo "c2.appendChild(t2);";
	echo "c3.appendChild(t3);";
	echo "c4.appendChild(t4);";
	echo "c5.appendChild(t5);";
	echo "c6.appendChild(t6);";
	echo "c7.appendChild(t7);";
	echo "cabecera.appendChild(c1);";
	echo "cabecera.appendChild(c2);";
	echo "cabecera.appendChild(c3);";
	echo "cabecera.appendChild(c4);";
	echo "cabecera.appendChild(c5);";
	echo "cabecera.appendChild(c6);";
	echo "cabecera.appendChild(c7);";
	echo "	for (var i = 0; i < 5; i++) {";
	echo "		var hilera = document.createElement(\"tr\");";
	echo "		for (var j = 0; j < 7; j++) {";
	echo "			var celda = document.createElement(\"td\");";
	echo "			var textoCelda;";
	echo "			if(j==0){textoCelda = document.createTextNode(i+\"-1\");}";
	echo "			if(j==1){textoCelda = document.createTextNode(i+\"-2\");}";
	echo "			if(j==2){textoCelda = document.createTextNode(i+\"-3\");}";
	echo "			if(j==3){textoCelda = document.createTextNode(i+\"-4\");}";
	echo "			if(j==4){textoCelda = document.createTextNode(i+\"-5\");}";
	echo "			if(j==5){textoCelda = document.createTextNode(i+\"-	6\");}";
	echo "			if(j==6){textoCelda = document.createTextNode(i+\"-7\");}";
	echo "			celda.appendChild(textoCelda);";
	echo "			hilera.appendChild(celda);";	
	echo "		}";
	echo "		tblBody.appendChild(hilera);";
	echo "	}";
	echo "tabla.appendChild(cabecera);";
	echo " 	tabla.appendChild(tblBody);";
	echo " 	body.appendChild(tabla);";
	echo "	tabla.setAttribute(\"border\", \"2\");";
	echo "}";
	echo "</script>";
	echo "</html>";
?>