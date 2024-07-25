<?php

function genPW($length){

    $simboli = ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '=', '"'];

    $alfabeto_minuscolo = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $alfabeto_maiuscolo = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    $numeri = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    //unisco in un unico array attraverso array_merge tutti i dati
    $passwordArray = array_merge($alfabeto_minuscolo, $alfabeto_maiuscolo, $numeri, $simboli);

    // shuffle mescola in modo casuale i dati dentro l'array
    shuffle($passwordArray);

    //creo la variabile password (vuota)
    $password = '';

    //ciclo a seconda della lunghezza stabilita
    for ($i = 0; $i < $length; $i++) {
        //array_rand restituisce un indice casuale dell'array $passwordArray ad ogni ciclo e attraverso .= viene "pushato" in password
        $password .= $passwordArray[array_rand($passwordArray)];
    }

    return $password;
}

// se $_GET['pw-length'] è stato settato
if (isset($_GET['pw-length'])) {
    //length = equivalente a parseINT($_GET['pw-length'])
    $length = intval($_GET['pw-length']);
    
    //se la length è compreso fra 8 e 32
    if ($length >= 8 && $length <= 32) {
        //la password è il risultato della funzione
        $password = genPW($length);
    } else {
        //altrimenti messaggio errore
        $password = '<span class="error">La lunghezza della password deve essere compresa tra 8 e 32 caratteri.</span>';
    }
    //altrimenti messaggio iniziale
} else {
    $password = 'Generare una password di lunghezza compresa fra 8 e 32 caratteri';
}