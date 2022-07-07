<?php 

#clase----------------------------------------
#clase: es un modelo que se utsa para crear objetos que compartien un mismo comportamiento, mismo estado e identidad

class Automovile {

  #propiedades:
  #son las caracteristicas que puede tener un objeto

  public $marca;
  public $modelo;

  #metodo
  #es un algoritmo asociado a un objeto que indica la capacidad delo que este puede hacer. la unica diferencia es que se llama METODO a las funciones de una clase (en la POO) mientras que se llama funciones a los algoritmos de la programacion estructurada

  public function mostrar ($vari){
   echo "<p>hola! soy un $this->marca, modelo $this->modelo , con una variable de parametro $vari</p>";
  }

}

#objeto---------------------------------

# una entidad  provista de metodos o mensajes a los cuales responde propiedades con valores concretos 

$a =new Automovile();
$a->marca="toyota";
$a->modelo="corolla";
$a->mostrar($a->modelo);
#
$b=new Automovile();
$a->marca="nissan";
$a->modelo="accent vision";
$a->mostrar($a->modelo);

#principios de la POO que se cumplen en este ejemplo.

#abstraccion :nuevos tipos de datos (el que tu quieras tu lo creas)
#encapsulacion : organixar el codigo en grupos logicos
#ocultamiento : ocultar detalles de implementacion y exponer solo los detalels que sean necesarios para el resto del sistema





?>