<?php
// --- Esercizio 5---
/*Utilizzando la logica appena appresa con l’operatore Modulo, scrivere un programma che stampi in console tutti i numeri da 1 a 30.

    Se il numero e’ multiplo di 3 deve stampare “PHP”;
    Se multiplo di 5 deve stampare “JAVASCRIPT”;
    Se multiplo di 3 e 5 (15) deve stampare “Francesco”;*/

//Risultato

//1,2,PHP,4,Javascript,PHP,7,8,PHP,Javascript,11,PHP,13,14,Francesco,16,17,PHP,19,Javascript,PHP,22,23,PHP,Javascript,26,PHP,28,29,Francesco

for ($i = 1; $i <= 30; $i++) {
    if ($i % 15 === 0) {
        echo "LEYSAN \n";
    } elseif ($i % 5 === 0) {
        echo "JAVASCRIPT \n";
    } elseif ($i % 3 === 0) {
        echo "PHP \n";
    }
}

// --- Esercizio 6---
/*realizzare un ciclo for che:

    Se il genere e’ M stampare “Buongiorno Sig. $nome”
    Se e’ F stampare “Buongiorno Sig.ra $nome” .
    Se non è definito Stampare “$nome ha preferito non specificare."

*/
$arrays = [
  [
    'name' => 'Gianbertoldo',
    'gender' => 'M',
  ],
  [
    'name' => 'Lucrezia',
    'gender' => 'F',
  ],
  [
    'name' => 'Pancrazio',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];

for ($i = 0; $i < count($arrays); $i++) {
    $nome = $arrays[$i]['name'];
    $genere = $arrays[$i]['gender'];

    if ($genere === 'M') {
        echo "Buongiorno Sig. $nome\n";
    } elseif ($genere === 'F') {
        echo "Buongiorno Sig.ra $nome\n";
    } else {
        echo "$nome ha preferito non specificare.\n";
    }
}