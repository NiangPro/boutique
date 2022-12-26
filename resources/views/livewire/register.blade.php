<div>
   @include('layouts.navbar')

   
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Inscription</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
								<form class="form-stl" wire:submit.prevent="store" name="frm-login" method="get" >
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Prenom *</label>
										<input type="text" id="frm-reg-pass" class=" @error('form.prenom') is-invalid @enderror" wire:model="form.prenom" name="reg-pass" placeholder="Prénom">
                                        @error('form.prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Nom *</label>
										<input type="text" id="frm-reg-cfpass" class=" @error('form.nom') is-invalid @enderror" wire:model="form.nom" name="reg-cfpass" placeholder="Nom">
                                        @error('form.nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Téléphone *</label>
										<input type="text" id="frm-reg-pass" class=" @error('form.tel') is-invalid @enderror" wire:model="form.tel" name="reg-pass" placeholder="Numéro de téléphone">
                                        @error('form.tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Adresse*</label>
										<input type="text" id="frm-reg-cfpass" class=" @error('form.adresse') is-invalid @enderror" wire:model="form.adresse" name="reg-cfpass" placeholder="Adresse">
                                        @error('form.adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email</label>
										<input type="email" id="frm-reg-email" class=" @error('form.email') is-invalid @enderror" wire:model="form.email" name="reg-email" placeholder="Adresse Email">
                                        @error('form.email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
									
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Mot de passe *</label>
										<input type="password" id="frm-reg-pass" class=" @error('form.password') is-invalid @enderror" wire:model="form.password" name="reg-pass" placeholder="Mot de passe">
                                        @error('form.password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Confirmation *</label>
										<input type="password" wire:model="form.password_confirmation" id="frm-reg-cfpass" name="reg-cfpass" placeholder="Confirmation">
									</fieldset>
									<input type="submit" class="btn btn-sign" value="Créer" >
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
</div>
