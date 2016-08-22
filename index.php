<html>
<head>
	<title></title>
</head>
<body>
<h1>Hola !!! </h1>
<?php
$nombre = "Charly";
echo "<h2>Hola php soy $nombre</h2>";
echo '<h2>Hola php soy $nombre</h2>';
echo "<h2>Hola php soy ".$nombre."</h2>"; 
echo rand(1,10) ;
$veces = 10;
for ($i=0; $i < $veces	; $i++) {
    
    switch (rand(o,9)) {
    	case '0':
    		$cont0++;
    		break;
    	case '1':
    		$cont1++;
    		break;
    	case '2':
    		$cont2++;
    		break;
    	case '3':
    		$cont3++;
    		break;
    	case '4':
    		$cont4++;
    		break;
    	case '5':
    		$cont5++;
    		break;
    	case '6':
    		$cont6++;
    		break;
    	case '7':
    		$cont7++;
    		break;
    	case '8':
    		$cont8++;
    		break;
    	case '9':
    		$cont9++;
    		break;
    	
    	default:
    		# code...
    		break;
    }
    echo " <br />";

}
$cont0 = 0;
$cont1 = 0;
$cont2 = 0;
$cont3 = 0;
$cont4 = 0;
$cont5 = 0;
$cont6 = 0;
$cont7 = 0;
$cont8 = 0;
$cont9 = 0;


 ?>
</body>
</html>
