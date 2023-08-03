<?php
$message = 'Hello World !!';
$messageAvecAnnee = $message . ' 2023';
echo $messageAvecAnnee;
?>

<?php

echo "<br><br>Oui:<br>";

$a = 10;
$b = 20;

echo "<br>Avant l'échange : a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "<br>Après l'échange : a = $a, b = $b<br>";
?>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<br>Hello World !! - Iteration $i<br>";
}
?>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World !! - Iteration $i<br>";
    }
}
?>

<?php
do {
    $chiffreAleatoire = rand(1, 3);
    echo "Le chiffre aléatoire est $chiffreAleatoire<br>";
} while ($chiffreAleatoire != 2);
?>

<?php
$villes = ['Paris', 'Marseille', 'Reims', 'Charleville'];

foreach ($villes as $ville) {
    echo $ville . "<br>";
}
?>

<?php
$villes = ['Paris', 'Marseille', 'Reims', 'Charleville'];
for ($i = 0; $i < count($villes); $i++) {
    echo $villes[$i] . "<br>";
}
?>

<?php
$infosVilles = [
    [
        'ville' => 'Paris',
        'habitants' => '2,161 millions',
        'superficie' => '104,5',
        'altitude' => '35',
    ],
    [
        'ville' => 'Marseille',
        'habitants' => '861 635',
        'superficie' => '240,6',
        'altitude' => '242',
    ],
    [
        'ville' => 'Reims',
        'habitants' => '184 076',
        'superficie' => '46,9',
        'altitude' => '95',
    ],
    [
        'ville' => 'Charleville',
        'habitants' => '47 847',
        'superficie' => '31,44',
        'altitude' => '228',
    ],
];

foreach ($infosVilles as $info) {
    echo "La ville de {$info['ville']} a {$info['habitants']} habitants, pour une superficie de {$info['superficie']} km2, et une altitude de {$info['altitude']} m.<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pseudo'])) {
            $pseudo = $_POST['pseudo'];
            echo "<p>Pseudo saisi : $pseudo</p>";
        }
        echo '<a href="">Retour au formulaire</a>';
    }
    else {
    ?>

    <form action="" method="POST">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo">
        <input type="submit" value="Submit">
    </form>

    <?php
    }
    ?>
</body>
</html>