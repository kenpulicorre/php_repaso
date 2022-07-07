<?php

#concdiciones
 
$a=2;
$b=15;

if ($a <$b) {
  echo "a es menor que b";
} else {
  # code...
  echo "a es mayor que b";
}

#switches

echo "<hr></hr>";

$dia="lunes";

switch ($dia) {
  case 'sabado':
    # code...
    echo "descanso";
    break;
     case 'domingo':

    # code...
    echo "descanso2";

    break;
     case 'lunes':
    # code...
    echo "a camellar so";

    break;
  
  default:
    # code...
    break;
}
echo "<hr></hr>";

# ciclos------

#ciclo while
$n=1;

while ($n <= 3) {
  # code...
  echo "imprime" , $n;
  echo "<br></br>";
$n++;
}

#ciclo do while
echo "<hr></hr>";
$n2=1;
do {
  # code...
    echo "imprime do" ,$n2;
  echo "<br></br>";
$n2++;

} while ($n2 <= 3);

#ciclo for
echo "<hr></hr>";
for ($i=0; $i <3 ; $i++) { 

  # code...
 echo "imprime for" ,$i;
  echo "<br></br>";
  

}


 
?>