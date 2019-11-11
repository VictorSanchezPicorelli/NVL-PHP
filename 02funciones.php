		<?php
		echo '<h1> Esto es un ejemplo para contar letras A</h1>';
		
		$cadena = 'Esto es un ejemplo para contar letras A';
		$a = 0; $e = 0; $i = 0; $o = 0; $u = 0;
		for ($cont=0; $cont<=strlen($cadena)-1; $cont++) {
			switch ($cadena[$cont]) {
				case 'a': case 'A':
					$a++;
				
				}
			}
		echo 'Letra: a encontrada '.  $a.' veces<br/>';
		
		echo '</br></br>';
	