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

foreach ($teams as $team) {
    echo '<div>' . $team['home'] . ' - ' . $team['away'] . ' | ' . $team['pointsHome'] . '-' . $team['pointsAway'] . '</div>';
}
;

//var_dump($_GET);
$nome = $_GET['nome'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (!empty($_GET['nome']) && !empty($_GET['mail']) && !empty($_GET['age'])) {
    echo 'Inserisci i tuoi dati';
} else {
    if (strlen($nome) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
}

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $postDate) {
    foreach ($postDate as $dates) {
        foreach ($dates as $date) {
            echo '<div class="m-2">' . $date . '</div>';
        }
    }
}

$arrayRandom = [];
while(count($arrayRandom) < 15){
    $numRandom = rand(1, 100);
    if(!in_array($numRandom, $arrayRandom)){
        $arrayRandom[] = $numRandom;
    }
}
foreach($arrayRandom as $random){
    echo '<div>'.$random.'</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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