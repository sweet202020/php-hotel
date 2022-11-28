<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
var_dump($_GET);
if (!$_GET['parking']) {
    echo 'ciao';
} else {
    foreach ($hotels as $hotel) {
        echo $hotel['parking'];
    }
}

?>

</html>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center mb-5">Hotels</h1>
    <form action="index.php" method="get">
        <input type="checkbox" name="parking" id="parking">Parcheggio
        <button type="submit">invia richiesta</button>
    </form>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <td></td>
                    <?php foreach ($hotels as $hotel) : ?>

                        <td scope="row"><?= $hotel['name'] ?></td>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary">
                    <td>descrizione</td>
                    <?php foreach ($hotels as $hotel) : ?>
                        <td scope="row"><?= $hotel['description'] ?></td>
                    <?php endforeach ?>
                </tr>
                <tr class="table-primary">
                    <td>parcheggio</td>
                    <?php foreach ($hotels as $hotel) : ?>
                        <td scope="row">
                            <?php if ($hotel['parking']) {
                                echo 'si';
                            } else {
                                echo 'no';
                            } ?>
                        </td>
                    <?php endforeach ?>
                </tr>
                <tr class="table-primary">
                    <td>voto</td>
                    <?php foreach ($hotels as $hotel) : ?>
                        <td scope="row"><?= $hotel['vote'] ?></td>
                    <?php endforeach ?>
                </tr>
                <tr class="table-primary">
                    <td>distanza dal centro</td>
                    <?php foreach ($hotels as $hotel) : ?>
                        <td scope="row"><?= $hotel['distance_to_center'] ?></td>
                    <?php endforeach ?>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>