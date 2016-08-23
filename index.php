<html>
<head>
	<title></title>
</head>
<body>
<h1>Hola !!! </h1>
<?php
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
$nombre = "Charly";
echo "<h2>Hola php soy $nombre</h2>";
echo '<h2>Hola php soy $nombre</h2>';
echo "<h2>Hola php soy ".$nombre."</h2>"; 
echo rand(1,10) ;
$contadores=10;
for ($i=0; $i < $contadores ; $i++) { 
	$contadores[$i]=0;
}
//var_dump , var_dump($miarray); mostrar desde php
//console.log("error"); codigo javascript. tengo que mezclar ambos codigos. solo se puede pasar datos de Java script a php
$veces = 100;
for ($i=0; $i <$veces ; $i++) { 
	$contadores[rand(0,$contadores)]++;
}

/*
for ($i=0; $i < $veces	; $i++) {
    
    switch (rand(0,9)) {
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
    	if (($cont7*100/$veces)<5) {
    		$cont7++;
    	}
    	else
    	{
    		$i--;
    		continue;
    	}
    		
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
    
  */  

}
	echo "<h2>Numeor 1: $cont0 , porcentaje: %".(($cont0*100)/$veces)."</h2>";

    echo " <br />";
    echo "<h2>Numeor 1: $cont1 , porcentaje: %".(($cont1*100)/$veces)."</h2>";
   echo " <br />";
    echo "<h2>Numeor 1: $cont2 , porcentaje: %".(($cont2*100)/$veces)."</h2>";
    echo " <br />";
    echo "<h2>Numeor 1: $cont3 , porcentaje: %".(($cont3*100)/$veces)."</h2>";
   echo " <br />";
    echo "<h2>Numeor 1: $cont4 , porcentaje: %".(($cont4*100)/$veces)."</h2>";
    echo " <br />";
    echo "<h2>Numeor 1: $cont5 , porcentaje: %".(($cont5*100)/$veces)."</h2>";
    echo " <br />";
    echo "<h2>Numeor 1: $cont6 , porcentaje: %".(($cont6*100)/$veces)."</h2>";
    echo " <br />";
    echo "<h2>Numeor 1: $cont7 , porcentaje: %".(($cont7*100)/$veces)."</h2>";
    echo " <br />";
    echo "<h2>Numeor 1: $cont8 , porcentaje: %".(($cont8*100)/$veces)."</h2>";
        echo " <br />";
    echo "<h2>Numeor 1: $cont9 , porcentaje: %".(($cont9*100)/$veces)."</h2>";

    echo " <br />";




 ?>
</body>
</html>
