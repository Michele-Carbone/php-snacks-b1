<?php

/*
SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$students = [
    [
        'name' => 'Michele',
        'Lastname' => 'Car',
        'votes' => [8, 5, 2, 0],
    ],

    [
        'name' => 'Macheale',
        'Lastname' => 'Parat',
        'votes' => [9, 5, 2, 7],
    ],

    [
        'name' => 'Harry',
        'Lastname' => 'Dolom',
        'votes' => [7, 6, 5, 4],
    ],

    [
        'name' => 'Nilana',
        'Lastname' => 'Pofato',
        'votes' => [7, 5, 4, 7],
    ]
];



function get_medium($numbers)
{
    //sommare tutti i numeri
    $total_numbers = count($numbers);
    //somma del numero dei voti
    $total = array_sum($numbers);
    //media dei voti
    $medium = $total / $total_numbers;
    //arrotondamento della media
    return round($medium);
}
