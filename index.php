<?php
/*
BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida")
*/

require_once __DIR__ . '/snack1.php';
require_once __DIR__ . '/snack2.php';


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
        <?php foreach ($students as $student) : ?>
            <h2><?php echo $student['name'] . ' ' . $student['Lastname'] ?></h2>
            <h5><?php echo get_medium($student['votes']) ?></h5>
        <?php endforeach ?>
    </div>
</body>

</html>