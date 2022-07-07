<?php

#variable numerica
 $var1Nume= 5;
 echo "variable result: ", $var1Nume;
 echo "<br></br>";
 echo "el tipo es: ";
 var_dump($var1Nume);

 
 echo "<hr></hr>";
 #variable texto
 $palabra ="palabra";
 echo "esto es una variable string: ", $palabra;
 echo "<br></br>";
  echo "el tipo es: ";
 var_dump($palabra);

 echo "<hr></hr>";

#booleano
 $boleana=true;
 echo "esto es un booleano: ", $boleana;
 echo "<br></br>";
  echo "el tipo es: ";
 var_dump($boleana);

 echo "<hr></hr>";
#arreglo
 $arrayColor=array("red",  "blue");
 echo "estto es un array de colores: ", $arrayColor[0], " ", $arrayColor[1];
  echo "<br></br>";
  echo "el tipo es: ";
 var_dump($arrayColor);

 echo "<hr></hr>";

 # variable con propiesdades
 $verduras=array("verd1"=>"lechuga","verd2"=>"tomate");
 echo "esto es una variable aarreglo con propiedes:  $verduras[verd1]", " verdura 2:" , $verduras["verd2"];

 echo "<br></br>";
  echo "el tipo es: ";
 var_dump($verduras);

 echo "<hr></hr>";

#variables objeto
$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es un objeto: $frutas->fruta1";
 echo "<pr></pr>";

echo " esto es un objeto 2: ", $frutas->fruta2;
echo "<br></br>";
  echo "el tipo es: ";
 var_dump($frutas);

 echo "<hr></hr>";



?>