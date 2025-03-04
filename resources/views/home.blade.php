<html>
<head>
    <title>Antrian Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .header-image {
            position: relative;
            text-align: center;
            color: white;
        }
        .header-image img {
            width: 100%;
            height: auto;
        }
        .header-title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .card-title {
            font-size: 1.5rem;
        }
        .queue-number {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Rumah Sakit Sehat Selalu</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
            $poli = [
                ["nama" => "Poli Umum", "nomor" => "A001"],
                ["nama" => "Poli Gigi", "nomor" => "B002"],
                ["nama" => "Poli Anak", "nomor" => "C003"],
                ["nama" => "Poli Mata", "nomor" => "D004"],
                ["nama" => "Poli THT", "nomor" => "E005"],
                ["nama" => "Poli Kulit", "nomor" => "F006"],
                ["nama" => "Poli Jantung", "nomor" => "G007"],
                ["nama" => "Poli Saraf", "nomor" => "H008"],
                ["nama" => "Poli Bedah", "nomor" => "I009"]
            ];

            foreach ($poli as $p) {
                echo '<div class="col">';
                echo '<div class="card h-100 text-center bg-primary bg-opacity-75">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $p["nama"] . '</h5>';
                echo '<p class="queue-number">' . $p["nomor"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>