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

//---- Esercizio 7 ----
//Ripetere il 6 con il foreach

foreach ($arrays as $person) {
    $nome = $person['name'];
    $genere = $person['gender'];

    if ($genere === 'M') {
        echo "Buongiorno Sig. $nome\n";
    } elseif ($genere === 'F') {
        echo "Buongiorno Sig.ra $nome\n";
    } else {
        echo "$nome ha preferito non specificare.\n";
    }
}

//---- Esercizio 8 ----
/*Utilizzando il costrutto While (Pre-Condizionale), realizzare un sistema di "Aggiungi al carrello" in modo tale da eseguire delle operazioni di somma fino al raggiungimento del budget massimo inserito dall’utente appena eseguirete il programma: //Ad Esempio
$budget = 10;// valore preso in input da readline
//Aggiungo articolo 1
$costo_articolo_1 = 5;// valore preso in input da readline
$budget = $budget - costo_articolo_1;*/
//Budget Rimanente 5 Euro;
//Nel costrutto while, una volta definita la condizione, dovrete di volta in volta chiedere all’utente il costo dell’articolo e visualizzare a schermo il budget Rimanente. Nel momento in cui il budget sarà 0 il programma terminerà l'esecuzione. ATTENZIONE: Gestire l’eventualità in cui venga scritto un prezzo maggiore del budget a disposizione; 
//Il Budget rimanente non potrà mai assumere un valore negativo;



// Chiediamo il budget iniziale? senza readline 


$budget = 10;
$articoli = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$articolo_num = 1;
$i = 0;

while ($budget > 0 && $i < count($articoli)) {
    $costo = $articoli[$i];

    echo " Aggiungi articolo $articolo_num (€$costo)\n";

    if ($costo > $budget) {
        echo "Il costo (€$costo) è maggiore del budget disponibile (€$budget)\n";
    } else {
        $budget -= $costo;
        echo " Aggiunto. Budget rimanente: €$budget\n";
        $articolo_num++;
    }

    $i++;
}

if ($budget === 0) {
    echo "Budget esaurito.\n";
} 


