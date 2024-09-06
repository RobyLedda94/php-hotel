<?php
    // array associativo
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

    // con il var_damp stampo a video tutti i dati dell'array associativo hotels
    // var_dump($hotels);
    
    // mostro i dati dell'array associativo a video con il ciclo for
    //  foreach($hotels as $hotel){
    //      var_dump($hotel);
    //  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link a bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotels</title>
</head>
<body>
    <!-- struttura html -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-header text-center">
                        <h1>Tabella Hotels</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-main table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrizione</th>
                                    <th>Parcheggio</th>
                                    <th>Voto</th>
                                    <th>Distanza dal centro</th>
                                </tr>
                            </thead>
                                    <!-- nel tbody vado a ciclare l'array -->
                            <tbody>
                                    <!-- tag php con ciclo foreach -->
                                <?php foreach($hotels as $hotel){ ?>
                                <tr>
                                    <!-- echo recupero il dato dall'array e lo mostro a video -->
                                    <td class="py-3"><?php echo $hotel['name']; ?></td>
                                    <td class="py-3"><?php echo $hotel['description']; ?></td>
                                    <td class="py-3"><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                                    <td class="py-3"><?php echo $hotel['vote']; ?></td>
                                    <td class="py-3"><?php echo $hotel['distance_to_center']; ?>Km</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>