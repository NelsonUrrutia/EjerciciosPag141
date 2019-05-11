<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
	<meta name="viewpot" content="width=device-width,Initial-escale=1,Maximun-scale=1">
</head>
<body>
	<header></header>
	<nav></nav>
	<aside></aside>
        <section>
         <p>Ingrese los valores para la matriz de 3x3</p>
            <?php
                 
	    echo "<form action='#' method='POST'>";
	 	for ($i=0; $i <3 ; $i++) { 
	 		for ($j=0; $j < 3; $j++) {
	 	    echo "Ingrese un valor en la posicion [".$i. "][" .$j. "]: <input type='text' name='matriz[$i][$j]'><br>";
	 		}
	 	}
	 	    echo "<br><input type='submit' name='b1' value='Sumar Diagonal'></form><hr>";
	 	if (isset($_POST['b1'])) {
	 		$matriz=$_POST['matriz'];
	 		$suma=0;

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j< 3; $j++) {
                echo"&nbsp;&nbsp;&nbsp;".$matriz[$i][$j];
            }
            echo "<br>";
        }

	 		for ($i=0; $i < 3; $i++) { 
	 			for ($j=0; $j < 3; $j++) { 
	 				if ($i-$j==0) {
	 					$suma+=$matriz[$i][$j];
	 				}
	 			}
	 		}
	 		echo "La suma de la diagonal es: " .$suma;
	 	}
	 ?>
           
        </section>
	<footer></footer>
	
</body>
</html>