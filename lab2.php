<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>For Loops</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
        for ($i = 1; $i < 4; $i++) {
            echo "<dt>Outer loop iteration $i";

            for ($j = 1; $j < 4; $j++) {
                echo "<dd>Inner loop iteration $j";
            }
        }

    
        ?>

    <form action="welcome.php" method="post">
    Num1: <input type="number" ><br>
    Num2: <input type="number" ><br>
    <input type="submit">
    </form>


    </body>

</html>