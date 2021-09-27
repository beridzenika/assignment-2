<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
    
<?php

$data = [
    [
        "id" => 1,
        "name" => "Giorgi",
        "lastname" => "Amashukeli",
        "country"  => "Georgia",
        "skills" => ["html", "css", "js"],
        "available" => true
    ],
    [
        "id" => 2,
        "name" => "Mariam",
        "lastname" => "Abashidze",
        "country"  => "Georgia",
        "skills" => ["html"],
        "available" => true
    ],
    [
        "id" => 3,
        "name" => "Andria",
        "lastname" => "Beridze",
        "country"  => "USA",
        "skills" => [],
        "available" => false
    ],
    [
        "id" => 4,
        "name" => "Nino",
        "lastname" => "Nozadze",
        "country"  => "Germany",
        "skills" => ["Js", "css"],
        "available" => false
    ]
];

?>

<table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Country</th>
        <th>Skills</th>
        <th>Available for position</th>
    </tr>

    <?php foreach ($data as $key => $value) { ?>

        <tr>
            <td><?php echo $value['name']?></td>

            <td><?php echo $value['lastname']?></td>

            <td><?php echo $value['country']?></td>

            <td><?php if ($value['skills'] == true) {
                echo join(' ',$value['skills']);
                // sxvanairad ver davwere, rom listebis saxit gamosuliko :/
            } else{ ?>
                <span class="false">person has no skills</span>
            <?php } ?></td>

            <td><?php if ($value['available'] == true) {?>
                    <span class="true">available</span>
                <?php } else{ ?>
                    <span class="false">no available</span>
                <?php } ?>
            </td>
        </tr>

        <?php } ?>

</table>

</body>
</html>