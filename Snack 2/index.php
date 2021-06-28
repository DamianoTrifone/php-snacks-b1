<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $_GET["name"];
    $_GET["mail"];
    $_GET["age"];

    if ((strlen($_GET["name"]) > 3) && (strpos($_GET["mail"], '.') !== false) && (strpos($_GET["mail"], '@') !== false) && (is_numeric($_GET["age"]) !== false)) {
        echo "Accesso riuciuto";
    } else{
        echo "Accesso negato";
    };
; ?>
