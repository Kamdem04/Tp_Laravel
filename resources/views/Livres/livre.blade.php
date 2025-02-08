<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du livre</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2A2D34;
            --secondary-color: #009DDC;
            --accent-color: #E94F37;
            --light-bg: #F9F9F9;
        }
        .navbar {
            background: var(--primary-color);
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="#">📚 Catalogue de livres</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>
    </nav>
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('images/default-cover.jpg') }}" class="card-img h-100" alt="{{ $book->titre }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="display-4 text-primary">{{ $book->titre }}</h1>
                        <div class="badge badge-primary mb-3">{{ $book->auteur_nom }}</div>
                        <p class="lead">{{ $book->resume }}</p>
                        <dl class="row">
                            <dt class="col-sm-3">Date de publication</dt>
                            <dd class="col-sm-9">{{ date('d/m/Y', strtotime($book->date_publication)) }}</dd>
                            
                            <dt class="col-sm-3">ISBN</dt>
                            <dd class="col-sm-9">{{ $book->isbn }}</dd>
                            
                            
                        </dl>
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">
                            ← Retour au catalogue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>