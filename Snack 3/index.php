<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $random = [];
    echo "<pre>";
    for ($i=0; $i < 16; $i++) { 
        $randomNumber = rand(1, 50);
            if (!in_array($randomNumber, $random)) {
                $random = $randomNumber;
             } else{
                echo "Il valore è già presente";
            };
    }
    echo "</pre>"
; ?>
