<div>
    @include('layouts.navbar')

    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Connexion</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form name="frm-login" wire:submit.prevent="connecter">
									<fieldset class="wrap-title">
										<h3 class="form-title">Formulaire de connexion</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email</label>
										<input type="text" id="frm-login-uname" wire:model="form.email" placeholder="Entrer votre adresse email">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Mot de passe:</label>
										<input type="password" id="frm-login-pass" wire:model="form.password" placeholder="************">
									</fieldset>
									
									<input type="submit" class="btn btn-submit" value="Se connecter" name="submit">
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
</div>
