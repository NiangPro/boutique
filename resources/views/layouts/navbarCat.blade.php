<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Téléphone: (+123) 456 789</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            @if (Auth()->user())
                            <livewire:logout />
                            @else
                            <li class="menu-item  @if($title == 'login')bg-danger @endif" ><a title="Connexion" href="{{route("login")}}"><i class="fa fa-lock"></i> Connexion</a></li>
                            <li class="menu-item  @if($title == 'register')bg-danger @endif" ><a title="Inscription" href="{{route("register")}}"><i class="fa fa-file"></i> Inscription</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="index.html" class="link-to-home"><img src="../assets/images/logo-top-1.png" alt="mercado"></a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Rechercher ici...">
                                <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <div class="wrap-list-cate">
                                    <input type="hidden" name="product-cate" value="0" id="product-cate">
                                    <a href="#" class="link-control">Catégories</a>
                                    <ul class="list-cate">
                                        <li class="level-0">Toutes catégories</li>
                                        @foreach ($categories as $cat)
                                            <li class="level-1"><i class="fa fa-arrow-right"></i> {{$cat->name}}</li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        
                        <div class="wrap-icon-section minicart">
                            <a href="{{route('cart')}}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">4</span>
                                    {{-- <span class="title">CART</span> --}}
                                </div>
                            </a>
                        </div>
                        @if (Auth()->user())
                        <div class="wrap-icon-section minicart">
                            <a href="{{route('cart')}}" class="link-direction">
                                <i class="fa fa-user" aria-hidden="true"> {{Auth()->user()->prenom}}</i>
                                
                            </a>
                        </div>
                        @endif
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item   @if($title == 'home')bg-danger @endif">
                                <a href="{{route('home')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item  @if($title == 'shop')bg-danger @endif">
                                <a href="{{route("shop")}}" class="link-term mercado-item-title">Boutique</a>
                            </li>
                            @foreach ($categories as $key => $cat)
                                @if ($key < 5)
                                    <li class="menu-item">
                                        <a href="{{route('cat',['nom' =>$cat->slug])}}"  class="link-term mercado-item-title">{{$cat->name}}</a>
                                    </li>
                                @endif
                            @endforeach
                            
                            <li class="menu-item  @if($title == 'contact')bg-danger @endif">
                                <a href="{{route("contact")}}" class="link-term mercado-item-title">Contact</a>
                            </li>																	
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>