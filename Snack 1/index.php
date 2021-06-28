<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite = [
        [
           "Virtus Bologna" => "48",
            "Varese" => "56",
        ],
        [
            "Virtus Roma" => "60",
            "Treviso" => "55",
        ],
        [
            "S. C. Gira" => "58",
            "Trieste" => "40",
        ],
        [
            "Petrarca" => "64",
            "Partenope" => "75",
        ],
        [
            "Ginnastica Roma" => "74",
            "Pallacanestro Udine" => "70",

        ],
    ];
; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IV giornata di campionato</title>
    </head>
    <body>
        <h1>Risultati della quarta giornata di campionato</h1>
        <p><?php  
            echo "<pre>";
            print_r($partite);
            echo "</pre>";
        ; ?>
        </p>
    </body>
</html>