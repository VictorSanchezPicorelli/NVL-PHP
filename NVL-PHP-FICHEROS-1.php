<?php
$pagina = file_get_contents('https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt');
$findme = "molino";
$pos = strpos($pagina, $findme);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
if ($pos === false) {
    echo "La cadena '$findme' no fue encontrada en la cadena dada";
} else {
    echo "La cadena '$findme' fue encontrada en la cadena dada";
    echo " y existe en la posición $pos";
}

?>