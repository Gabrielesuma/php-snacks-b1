<?php
    $teams = [
        [
            'home' => "Olimpia Milano",
            'away' => "Brescia",
            'pointsHome' => 83,
            'pointsAway' => 77
        ],
        [
            'home' => "Tortona",
            'away' => "Virtus Bologna",
            'pointsHome' => 77,
            'pointsAway' => 84
        ],
        [
            'home' => "Reggiana",
            'away' => "Basket Napoli",
            'pointsHome' => 88,
            'pointsAway' => 74
        ],
        [
            'home' => "Pesaro",
            'away' => "Cremona",
            'pointsHome' => 91,
            'pointsAway' => 86
        ],
        [
            'home' => "Brindisi",
            'away' => "Venezia",
            'pointsHome' => 84,
            'pointsAway' => 80
        ]
    ];

    foreach($teams as $team){
        echo '<div>'.$team['home'].' - '.$team['away'].' | '.$team['pointsHome'].'-'.$team['pointsAway'].'</div>';
    };

    //var_dump($_GET);
    $nome = $_GET['nome'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if(empty($nome)){
        echo 'Inserisci i tuoi dati';
    } else{
        if(strlen($nome) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)){
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="nome">
        <input type="text" name="mail">
        <input type="text" name="age">
        <button type="submit">Invia</button>
    </form>
</body>
</html>