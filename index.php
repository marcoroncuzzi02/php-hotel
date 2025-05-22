<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <!-- elenco hotels -->
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
    ?>

        <h1 class="text-center">HOTELS</h1>

        <div class="card m-3">
            <?php
                foreach ($hotels as $hotel) {
                    echo "<div class='card m-3 p-3'>";
        
                    foreach ($hotel as $chiave => $valore) {
                        // Gestione del valore booleano per il parcheggio
                        if ($chiave === 'parking') {
                            $valore = $valore ? 'Sì' : 'No';
                        }

                        echo "
                            <div>
                                <span class='fw-bold'>" . ucfirst($chiave) . ":</span> 
                                <span>$valore</span>
                            </div>
                        ";
                    }

                    echo "</div>"; // chiude la card
                }
            ?>
        </div>
</body>
</html>