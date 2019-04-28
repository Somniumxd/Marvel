<?php
$heroes = [
    'Stark' => 37,
    'Thanos' => 100,
    'CapAmerica' => 95,
    'Panther' => 33,
    'Natasha' => 44,
    'Soldier' => 97,
    'Thor' => 1000,
    'Hulk' => 45,
    'Witch' => 22,
    'Matumba' => 0
];
$randHeroes = array_rand($heroes, 5);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Power</th>
    </tr>
    <?php
    foreach ($heroes as $heroName => $heroPower) { ?>
        <tr>
            <td><?= $heroName?></td>
            <td><?= $heroPower ?></td>
        </tr>
    <?php } ?>
</table>
<a href="index2.php">ROLL!!!</a>
</body>
</html>