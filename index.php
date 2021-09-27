<?php
/*
SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida")
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <h1><?php foreach (random_numbers_generate(1, 100, 15) as $number) echo "$number " ?></h1>
    <hr>

    <div>

    </div>
</body>

</html>