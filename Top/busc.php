<?php

// Array con nombre
$a[] = "Cuphead";
$a[] = "Stardew Valley";
$a[] = "Braid";
$a[] = "Fez";
$a[] = "Limbo";
$a[] = "Plantas vs Zombies 2";
$a[] = "Dead cells";
$a[] = "Machinarium";
$a[] = "Terraria";
$a[] = "Celeste";
$a[] = "Shovel knight";
$a[] = "Gang beast";
$a[] = "Youtubers life";
$a[] = "Undertale";
$a[] = "Ori";
$a[] = "Afterparty";
$a[] = "Indivisible";
$a[] = "Child of light";
$a[] = "Rime";
$a[] = "Hollow Knight";

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
 } else {
 $hint .= ", $name";
 }
 }
 }
}
// Mostrar "no hay sugerencias disponibles" si no se encontró ninguna
//sugerencia o no hay valores correctos de salida
echo $hint === "" ? "no hay sugerencias disponibles" : $hint;
?>