<?php


/*
    TIPOS DE DATOS:
    Entero (int / intenger)   99
    Coma flotante / decimales (float / double) = 3,45
    Cadenas (string) = "Hola yo soy un string"
    Boleano (bool) = 1  o 0 , true o false
    Null 
    Array (coleccion de objetos)
    Objetos
*/

// Usando el tipo de datos;
$numero = 100;  // integer
$decimal = 27.9; //double
$texto = "soy un texto";  // string
$verdadero = true; // boolean



//Obtener dato visualmente
echo gettype($numero); // integer
echo "<br>" ;
echo gettype($decimal); // double
echo "<br>" ;
echo gettype($texto); // string
echo "<br>" ;
echo gettype($verdadero); // boolean
echo "<br>" ;


// Debugear 
$mi_nombre []= "Maria Pinto Fullstack";
$mi_nombre []= "Maria Pinto Fullstack";
var_dump($mi_nombre); // Te muestra que tipo de datos contiene esa variable;


