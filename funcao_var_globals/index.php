<?php

function mostra_frase(){
    echo "Willian danilo";
}

mostra_frase();


function mostra_texto(){
    // Declara uma variavel global
    global $texto;
    echo $texto;
    echo "<br>";
    // Utiliza a variavel globals
    echo $GLOBALS["texto"];
}

mostra_texto();

?>