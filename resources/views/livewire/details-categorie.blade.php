<div>
    @include('layouts.navbarCat')
    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Boutique</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">

					<div class="wrap-banner style-twin-default">
                        <div class="banner-item">
                            <a href="#" class="link-banner banner-effect-1">
                                <figure><img src="../assets/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
                            </a>
                        </div>
                        <div class="banner-item">
                            <a href="#" class="link-banner banner-effect-1">
                                <figure><img src="../assets/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
                            </a>
                        </div>
                    </div>

					<div class="row">

						<ul class="product-list grid-products equal-container">
							@foreach ($cats->produits as $prod)
								<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('detail',['slug' =>$prod->nom])}}" title="{{$prod->nom}}">
                                                <figure><img src="{{asset('storage/images/'.$prod->image)}}" alt="{{$prod->nom}}"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('detail',['slug' =>$prod->nom])}}" class="product-name"><span>{{$prod->nom}}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{$prod->prix}} F CFA</span></div>
                                            <a href="#" class="btn add-to-cart">Ajouter au panier</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                               
							
						</ul>

					</div>
				</div><!--end main products area-->

				
			</div><!--end row-->

		</div><!--end container-->

	</main>
</div>
