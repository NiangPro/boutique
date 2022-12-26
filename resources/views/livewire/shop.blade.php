<div>
	@include('layouts.navbar')

    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Boutique</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
						</a>
					</div>

					<div class="row">

						<ul class="product-list grid-products equal-container">
							@if (count($produitsCat) > 0)
                                @foreach ($produitsCat as $prod)
								<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
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
							@else
                            	@foreach ($products as $prod)
								<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
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
							{{$products->links()}}
							@endif
                               
							
						</ul>

					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Toutes Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
								
                                @foreach ($categories as $cat)
                                    
								<li class="category-item has-child-cate" wire:click.prevent="getProduits({{$cat->slug}})">
									<a href="#"  class="cate-link">{{$cat->name}}</a>
									<span class="toggle-control">+</span>
								</li>
                                @endforeach
								
							</ul>
						</div>
					</div><!-- Categories widget-->


					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Produits récents</h2>
						<div class="widget-content">
							<ul class="products">
								
                                @foreach ($lastProducts as $key => $prod)
                                    @if ($key < 7)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('detail',['slug' =>$prod->nom])}}" title="{{$prod->nom}}">
                                                        <figure><img src="{{asset('storage/images/'.$prod->image)}}" alt=""></figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('detail',['slug' =>$prod->nom])}}" class="product-name"><span>{{$prod->nom}}</span></a>
                                                    <div class="wrap-price"><span class="product-price">{{$prod->prix}} F CFA</span></div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
								

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
</div>
