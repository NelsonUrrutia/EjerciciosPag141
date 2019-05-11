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
         <p>Ingrese los valores para la matriz de 4x4</p>
         <form>
             inpu  
         </form>
         
            <?php
                echo '<form action="#" method="POST">';
                for ($i = 0; $i < 4; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        echo "Ingrese un número en la casilla [".$i."][".$j."]:<input type='text' name='matriz[$i][$j]' value=''> <br>";
                    }
                }
                echo '<input type="submit" name="b1" value="Invertir Matriz"></form>';
                echo '<hr>';
                if (isset($_POST["b1"])) {
                    $matriz=$_POST["matriz"];
                    
                    echo 'Matriz Ingresada: <br><br>';  
                    for ($i = 0; $i < 4; $i++) {
                        for ($j = 0; $j < 4; $j++) {
                            echo '&nbsp;&nbsp;&nbsp;'.$matriz[$i][$j].'&nbsp'; 
                        }
                        echo '<br>';
                    }
                    echo 'Matriz Transpuesta: <br><br>';
                    
                    for ($i = 0; $i < 4; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            $aux = $matriz[$i][$j];
                            $matriz[$i][$j]=$matriz[$j][$i];
                            $matriz[$j][$i] = $aux;
                        }
                    }
                     for ($i = 0; $i < 4; $i++) {
                        for ($j = 0; $j < 4; $j++) {
                            echo '&nbsp;&nbsp;&nbsp;'.$matriz[$i][$j].'&nbsp'; 
                        }
                        echo '<br>';
                    }
                }
                
            ?>
           
        </section>
	<footer></footer>
	
</body>
</html>
