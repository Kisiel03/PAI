<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./uuuuu.php" method="POST">
        <input type="text" name="imie" />
        <input type="submit" />
    </form>
        <?php
           if(isset($_POST['imie'])){
            echo "Witaj baranie " . htmlspecialchars($_POST['imie']) . ". ";
        }else{
            echo "Co cie to gnojku.";
        }
        ?>
    </body>
</html>