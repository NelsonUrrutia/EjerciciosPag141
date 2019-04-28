<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewpot" content="width=device-width,Initial-escale=1,Maximun-scale=1">
</head>
<body>
	<header></header>
	<nav></nav>
	<aside></aside>
        <section>
            <form action="#" method="post">
                Ingrese el número de filas que quiere en su piramide <input type="text" name="n">
                <br> <input type="submit" name="b1">
            </form>
            <br>
            <?php
                if (isset($_POST["b1"])) {
                    $nu=$_POST["n"];                    
                        for ($i = 1; $i <=$nu; $i++) {
                            for ($j = 1; $j <=2*$nu-1; $j++) {
                                 if ($j>=$nu-($i-1) && $j<=$nu+($i-1)){
                                     echo '*';
                                 } else {
                                     print_r("  ");
                                 }
                            }
                            echo '<br>';
                        }
                    
                }
            
            ?>
            
        </section>
	<footer></footer>
	
</body>
</html>