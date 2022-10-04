<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./567.php" method="POST">
    <select name="kolor">
        <option value="czerwony">Czerwony</option>
        <option value="zielony">Zielony</option>
        <option value="niebieski">Niebieski</option>
    </select>
    <input type="submit" />
    </form>
    
        <?php
           if(isset($_POST['kolor'])){
            echo "Wybrany kolor: " . $_POST['kolor'];
        }
        ?>
    </body>
</html>