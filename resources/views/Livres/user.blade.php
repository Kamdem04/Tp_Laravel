<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de livres</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .navbar {
            background: #2A2D34;
        }
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: white !important;
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #E94F37;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">📚 BookCatalog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                            <span class="profile-icon">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Profil</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h1 class="text-center mb-5">Catalogue de livres</h1>
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
                        <div class="card-footer text-center">
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
    
    <footer class="text-center py-3 mt-5" style="background: #2A2D34; color: white;">
        &copy; {{ date('Y') }} Catalogue de livres. Tous droits réservés.
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
