<html>



<head>
<meta charset="utf-8">




<title>
Strona
</title>




</head>



<body>
<center>
Hello World
</center>
<?php
    $biblioteka = 5;
	$Ksiazka1 = 1;
	$Ksiazka2 = 2;
	$Ksiazka3 = 3;
	$Ksiazka4 = 4;
	$Ksiazka5 = 5;
	switch($biblioteka)
    {
        case 1:
            echo "Wybrałeś Ksiazke 1";
            break;
        case 2:
            echo "Wybrałeś Ksiazke 2";
            break;
        case 3:
            echo "Wybrałeś Ksiazke 3";
            break;
        case 4:
            echo "Wybrałeś Ksiazke 4";
            break;
        case 5:
            echo "Wybrałeś Ksiazke 5";
            break;
    }
?>
</body>
</html>