




<?php

/*
SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
*/


function random_numbers_generate($min_number, $max_number, $n_times)
{
    //controllo della differenza di inserimento dei numeri (min, max) sul totale che deve restituire (n_times)
    $diff_max_min = $max_number - $min_number + 1;
    if ($diff_max_min < $n_times) $n_times = $diff_max_min;

    $total_numbers = [];

    while (count($total_numbers) < $n_times) {
        $actual_numbers = rand($min_number, $max_number);
        //controllo che non ci sia il numero appena scelto
        if (!in_array($actual_numbers, $total_numbers)) $total_numbers[] = $actual_numbers;
    }
    return $total_numbers;
}

?>