<div class="main-sidebar" style="position: fixed;">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route("home")}}">
            <figure >
                    <img class="avatar mr-2" src="{{asset('storage/images/'.config('app.logo'))}}" alt="logo">BaanaBaana
              </figure>
            </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route("dashboard")}}">
            BB
        </a>
      </div>
      <ul class="sidebar-menu">


          <li class="@if ($page == "dashboard") active @endif"><a class="nav-link" href=""><i class="fas fa-fire"></i> <span>Tableau de bord</span></a></li>
         
          <li class="menu-header">Commercial</li>
          <li class="@if ($page == "categorie") active @endif"><a class="nav-link" href="{{route('categorie')}}"><i class="fa fa-tags" aria-hidden="true"></i> <span>Catégories</span></a></li>
          <li class="@if ($page == "produit") active @endif"><a class="nav-link" href="{{route('produit')}}"><i class="fab fa-product-hunt" aria-hidden="true"></i> <span>Produits</span></a></li>
          <li class="@if ($page == "client") active @endif"><a class="nav-link" href=""><i class="fa fa-users" aria-hidden="true"></i> <span>Clients</span></a></li>
         
          
          <li class="menu-header">Configurations </li>
          <li class="nav-item dropdown @if ($page == "profil" || $page == "password"  || $page == "general") active @endif">
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-cogs" aria-hidden="true"></i> <span>Parametres </span></a>
            <ul class="dropdown-menu">
                <li  class="@if ($page == "profil") active @endif"><a href=""><i class="fa fa-user-circle" aria-hidden="true"></i> Profil</a></li>
                <li class="@if ($page == "password") active @endif"><a href=""><i class="fa fa-lock" aria-hidden="true"></i>Mot de passe</a></li>
                
            </ul>
          </li>

        </ul>

    </aside>
  </div>
