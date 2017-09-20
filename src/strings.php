<?php

/**
* Libreria de funciones matemáticas.
*
*@author Anónimo  <anonimo@server.com>
*@license GPL
*/
namespace Lib\strings;

/**
*funcion que nos indica si la secuencia de caracteres "<->" esta en medio.
*
* Funcion que recibe una string por argumento $cadena que busca la secuencia
*si esta en medio de la string, teniendo en cuenta que el medio puede variar de un caracter.
*Si esta en medio devuelve TRUE y sino FALSE.
*<br>
*secuencia: "<->"
*<br>
*Ejemplo:
*<br>
*("xas<->bb") estaria en medio porque solo varia un caracter. Su resultado seria TRUE.
*
*Ejemplo 2:
*<br>
*("cas<->ccccc") NO estaria en medio porque varia de una un caracter. Su resultado seria FALSE.
*
*@param string $cadena donde recibimos el string.
*@return boolean devuelve un TRUE o FALSE dependiendo si esta en medio o no la secuencia "<->".
*/
function flechaMedio($cadena){
  //TODO falta implementar
    return false;
}
?>
