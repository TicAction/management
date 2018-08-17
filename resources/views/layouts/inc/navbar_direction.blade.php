<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="#">Gestion de l'école</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              {{Html::link("direction/",'Accueil',['class'=>'nav-link'])}}
            </li>
            <li class="nav-item">
                {{Html::link("direction/enseignant",'Enseignant',['class'=>'nav-link'])}}
            </li>
            <li class="nav-item">
                {{Html::link('direction/eleve','Élève',['class'=>'nav-link'])}}
            </li>
            <li class="nav-item">
                {{-- <a href="{{Auth::logout()}}" class="nav-link">Déconnexion</a> --}}
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajouter</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{route('direction_eleve')}}">Élève</a>
                    <a class="dropdown-item" href="#">Comportement</a>
                    <a class="dropdown-item" href="#">Groupe</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-secondary btn-danger my-2 my-sm-0" type="submit">Search</button>
        </form>

    </div>
</nav>
