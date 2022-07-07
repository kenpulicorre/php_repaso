<?php

#codigo imperativo o espagueti

$auto1=(object)["marca"=>"toyota","modelo"=>"corolla"];
$auto2=(object)["marca"=>"nisan","modelo"=>"accent vision"];

function mostrar($auto1n){
  echo "<p>hola! soy un $auto1n->marca, modelo $auto1n->modelo </p>";
}

  mostrar($auto1);
  mostrar($auto2);


?>