<?php
		echo '<h1> Esto es un ejemplo para contar letras U</h1>';
		
		$cadena = 'Esto es un ejemplo para contar letras U';
		$a = 0; $e = 0; $i = 0; $o = 0; $u = 0;
		for ($cont=0; $cont<=strlen($cadena)-1; $cont++) {
			switch ($cadena[$cont]) {
				case 'u': case 'U':
					$u++;
				
				}
			}
		echo 'Letra: u encontrada '.  $u.' veces<br/>';
		
		echo '</br></br>';