<?php 
	//lectura simultanea de dos ficheros
	$fichero1=fopen('fichero1.txt', 'r');
	$fichero2=fopen('fichero2.txt', 'r'); 

	$f1=fgetc($fichero1);
	$f2=fgetc($fichero2); 
	while (!feof($fichero1) || !feof($fichero2)) {
			
		if ($f1==$f2) {
			echo "fichero1: $f1 / fichero2: $f2 <br>";
			$f1=fgetc($fichero1);
			$f2=fgetc($fichero2); 

		} else {
			if ($f1>$f2) {
				echo "fichero1: -- / fichero2: $f2 <br>";
				$f2=fgetc($fichero2); 
			} else {
				if ($f1<$f2) {
					echo "fichero1: $f1 / fichero2: -- <br>";
				$f1=fgetc($fichero1); 
				}
			} 
		}
	}

	fclose($fichero1);
	fclose($fichero2);
?>