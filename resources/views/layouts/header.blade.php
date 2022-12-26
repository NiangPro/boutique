<nav class="navbar sticky-top navbar-expand-lg main-navbar " style="position:fixed;background:#e96303;">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>

    </form>
    <ul class="navbar-nav navbar-right">

      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{asset('storage/images/user-female.png')}}" height="40" width="100" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">{{Auth()->user()->prenom}}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profil
          </a>
          <a href="" class="dropdown-item has-icon">
            <i class="fa fa-lock" aria-hidden="true"></i> Mot de passe
          </a>
          <a href="" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Parametres
          </a>
          <div class="dropdown-divider"></div>
         <livewire:deconnexion />
        </div>
      </li>
    </ul>
  </nav>
