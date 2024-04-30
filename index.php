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
    
</body>
</html>