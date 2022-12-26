<div>
    @include('layouts.navbar')

    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>{{$prod->nom}}</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">

							    <li data-thumb="{{asset('storage/images/'.$prod->image)}}">
							    	<img src="{{asset('storage/images/'.$prod->image)}}" alt="product thumbnail" />
							    </li>

							    <li data-thumb="{{asset('storage/images/'.$prod->image)}}">
							    	<img src="{{asset('storage/images/'.$prod->image)}}" alt="product thumbnail" />
							    </li>
                                <li data-thumb="{{asset('storage/images/'.$prod->image)}}">
							    	<img src="{{asset('storage/images/'.$prod->image)}}" alt="product thumbnail" />
							    </li>
                                <li data-thumb="{{asset('storage/images/'.$prod->image)}}">
							    	<img src="{{asset('storage/images/'.$prod->image)}}" alt="product thumbnail" />
							    </li>
							    

							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <h2 class="product-name">{{$prod->nom}}</h2>
                            <div class="short-desc">
                                <ul>
                                    @foreach ($prod->categories as $cat)
                                        
                                     <li>{{$cat->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">{{$prod->prix}} F CFA</span></div>
                            
                            <div class="quantity">
                            	<span>Quantité:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart">Ajouter au panier</a>
                                
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$prod->description}}</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Produits similaires</h2>
						<div class="widget-content">
							<ul class="products">
                                @foreach ($prod->categories[0]->produits as $key => $prod)
                                @if ($key < 7)
                                    
                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="{{route('detail',['slug' =>$prod->nom])}}" title="{{$prod->nom}}">
                                                    <figure><img src="{{asset('storage/images/'.$prod->image)}}" alt=""></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>{{$prod->nom}}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{$prod->prix}} F CFA</span></div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                @endforeach
								
							</ul>
						</div>
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Produits récents</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                                @foreach ($lastProducts as $key => $prod)
                                    @if ($key < 5)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('detail',['slug' =>$prod->nom])}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{asset('storage/images/'.$prod->image)}}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">Nouveau</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="{{route('detail',['slug' =>$prod->nom])}}" class="function-link">Voir</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('detail',['slug' =>$prod->nom])}}" class="product-name"><span>{{$prod->nom}}</span></a>
                                                <div class="wrap-price"><span class="product-price">{{$prod->prix}} F CFA</span></div>
                                            </div>
                                        </div> 
                                    @endif
                                @endforeach
								
							</div>
						</div><!--End wrap-products-->
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main>
</div>
