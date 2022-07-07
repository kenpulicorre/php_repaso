<?php 
#funciones sin parametros

function saludo(){
  echo "hola";
}
 
 saludo();

 echo "<hr></hr>";

 #funciones con parametros
function despedir($adios){

  echo $adios, "<hr></hr>";
}
despedir("chaooo");

 echo "<pr></pr>";

#funciones con retornos

function retorno($retornar){
  $sum=2;
  $conca=$retornar.$sum;
 var_dump($conca);

  return $conca;

}
echo retorno("\n mensajito contatenado \n con numero:\n  ");
?>
