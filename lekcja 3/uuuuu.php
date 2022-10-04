 <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./formularz-textarea.php" method="POST">
    <textarea name='opis'>Treść <b>pogrubiona</b> i zwykła.</textarea>
        <input type="submit" />
    </form>
        <?php
        if(isset($_POST['opis'])){
            echo $_POST['opis'];
        }
        ?>
    </body>
</html>