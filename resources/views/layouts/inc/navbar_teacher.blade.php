
@guest
<nav class="navbar navbar-expand-lg navbar-dark bg-success rounded">
  <a class="navbar-brand" href="#">Portail de l'éducation</a>
  
  <ul class="navbar-nav ml-auto">
 <li class="nav-item">
      <a href="{{url('/login')}}" class="nav-link">CONNEXION</a>
    </li>

    <li class="nav-item">
      <a href="{{url('/register')}}" class="nav-link">S'ENREGISTRER</a>
    </li>
    
  </ul>
</nav>

@else
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{route('teacher_index')}}">Gestion de ma classe</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('student_index')}}">Accueil </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Autres</a>
            </li>

           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{route('student_create')}}">Ajouter un élève</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/logout')}}">DÉCONNEXION</a>
            </li>
        </ul>
        
        
    </div>
</nav>
@endif