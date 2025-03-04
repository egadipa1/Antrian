<html>
<head>
    <title>Antrian Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/home.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Rumah Sakit Sehat Selalu</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($polis as $poli) 
        
               <div class="col">
                <a href="{{ route('login', ['ID_Poli' => $poli->ID_Poli]) }}" id="Poli" class="card h-100 text-center bg-primary bg-opacity-75">
                    <div class="card-body">
                        <h5 class="card-title">{{$poli->Nama_Poli}}</h5>
                    </div>
                </a>
               </div>
            @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>