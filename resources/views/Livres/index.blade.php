<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2A2D34;
            --secondary-color: #009DDC;
            --accent-color: #E94F37;
            --light-bg: #F9F9F9;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }


        .navbar {
            background: var(--primary-color);
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            min-height: 550px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .pagination .page-link {
            color: var(--primary-color);
            border: 1px solid #dee2e6;
            margin: 0 5px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .pagination .page-link:hover {
            background: var(--secondary-color);
            color: white;
            border-color: var(--secondary-color);
        }

        footer {
            background:var(--primary-color);
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="#">📚 Catalogue de livres</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            @foreach($books as $book)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/default-cover.jpg') }}" class="card-img-top" alt="{{ $book->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->titre }}</h5>
                            <p class="card-text">{{ Str::limit($book->resume, 100) }}</p>
                            <p class="card-text"><strong>Auteur :</strong> {{ $book->auteur_nom}}</p>
                            <p><small class="text-muted">Publié le : {{ date('d/m/Y', strtotime($book->date_publication)) }}</small></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">📖 Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $books->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <footer class="mt-5">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Catalogue de livres. Tous droits réservés.</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
