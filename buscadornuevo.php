<?php // Array con nombre 
$a[] = "Cuphead"; 
$a[] = "Rime"; 
$a[] = "Dead cells"; 
$a[] = "Fez"; 
$a[] = "Machinarium"; 
$a[] = "Hollow knight"; 
$a[] = "Youtubers life"; 
$a[] = "Stardiew valley"; 
$a[] = "Iker"; 
$a[] = "Jennifer"; 
$a[] = "Katye"; 
$a[] = "Leire"; 
$a[] = "Nerea"; 
$a[] = "Olivia"; 
$a[] = "Pepe"; 
$a[] = "Amanda"; 
$a[] = "Raquel"; 
$a[] = "Cinthya"; 
$a[] = "Julio"; 
$a[] = "Uxue"; 
$a[] = "Evita"; 
$a[] = "Germán"; 
$a[] = "Toni"; 
$a[] = "Unai"; 
$a[] = "Violeta"; 
$a[] = "Lidia"; 
$a[] = "Elizabeth"; 
$a[] = "Elena"; 
$a[] = "Sigor"; 
$a[] = "Victoria"; 
 
// Obtener el parámetro “q” de la URL 
$q = $_REQUEST["q"]; 
 
$hint = ""; 
 
// Buscar todas las sugerencias del array si $q es diferente de ""  
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);     
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
                    } 
                    else {
                        $hint .= ", $name";
                         }
                    }
    }
} 
 
// Mostrar "no hay sugerencias disponibles" si no se encontró ninguna sugerencia o no hay valores correctos de salida
echo $hint === "" ? "no hay sugerencias disponibles" : $hint; 
?>