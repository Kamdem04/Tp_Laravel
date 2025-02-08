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

        h1 {
            font-family: 'Playfair Display', serif;
            color: var(--primary-color);
            font-size: 2.8rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            border-bottom: 3px solid var(--secondary-color);
            display: inline-block;
            padding-bottom: 0.5rem;
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
        <div class="container">
            <a class="navbar-brand" href="#">📚 Book Catalog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-5 text-center">Catalogue de livres</h1>
        <div class="row">
            @foreach($books as $book)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/default-cover.jpg') }}" class="card-img-top" alt="{{ $book->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->titre }}</h5>
                            <p class="card-text">{{ Str::limit($book->resume, 100) }}</p>
                            <p class="card-text"><strong>Auteur :</strong> {{ $book->auteur->nom }}</p>
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

    <!-- Modal Connexion -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Connexion</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Inscription -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
