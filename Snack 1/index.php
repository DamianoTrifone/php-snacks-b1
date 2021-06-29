<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite = [
        [
            Casa => "Virtus Bologna",
            Ospite => "Varese",
            PuntiCasa => 48,
            PuntiOspite => 56
        ],
        [
            Casa => "Virtus Roma",
            Ospite => "Treviso",
            PuntiCasa => 60,
            PuntiOspite => 55
        ],
        [
            Casa => "S. C. Gira",
            Ospite => "Trieste",
            PuntiCasa => 58,
            PuntiOspite => 40
        ],
        [
            Casa => "Petrarca",
            Ospite => "Partenope",
            PuntiCasa => 64,
            PuntiOspite => 75
        ],
        [
            Casa => "Ginnastica Roma",
            Ospite => "Pallacanestro Udine",
            PuntiCasa => 74,
            PuntiOspite => 70
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
            for ($i=0; $i < count($partite); $i++) { 
            $campionato = $partite[$i];
             echo "<li>" . $campionato["Casa"]. " - " . $campionato["Ospite"] . " || " . $campionato["PuntiCasa"] . " - " . $campionato["PuntiOspite"] . "</li>"; 
            };
        ; ?>
        </p>
    </body>
</html>