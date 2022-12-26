<div class="card mt-2 card-warning">
    <div class="card-header">
        <h4 class=" text-warning">
            Formulaire @if ($status ==="editProduct")
                de modification @else
                d'ajout
            @endif  produit</h4>
        <div class="card-header-action">
          <div class="btn-group">
              <button wire:click.prevent="changeEtat('listProduct')" class="btn btn-warning"><i class="fa fa-list"></i> Liste</button>
          </div>
        </div>
    </div>

    <div class="card-body mt-0 row">
        
        <div class="container col-md-6">
            <form wire:submit.prevent="store" class="mt-4">
                <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Nom<span class="text-danger">*</span></div>
                      </div>
                      <input type="text" class="form-control @error('form.nom') is-invalid
                        @enderror" placeholder="Nom" wire:model="form.nom">
                        @error('form.nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Description<span class="text-danger">*</span></div>
                      </div>
                      <input type="text" class="form-control @error('form.description') is-invalid
                      @enderror" wire:model="form.description" placeholder="Description">
                        @error('form.description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Prix<span class="text-danger">*</span></div>
                      </div>
                      <input type="number" min="1" class="form-control @error('form.tarif') is-invalid
                      @enderror" wire:model="form.tarif" placeholder="Tarif">
                        @error('form.tarif')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Catégorie</label>
                        <div class="d-flex">
                        @foreach ($categories as $cat)                            
                        {{$cat->name}}<input type="checkbox" wire:model="form.categories" name="categories" style="width: 40px; height:20px;" class="form-control" value="{{$cat->slug}}">
                        @endforeach
                        </div>
                            @error('form.taxe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Image produit</label>
                        <div class="card rounded">
                            <div class="card-image">     
                                @if ($image_produit)
                                    <img src="{{$image_produit->temporaryUrl()}}" alt="Responsive image" class="product_img">
                                @elseif(isset($current_produit->image))
                                    <img alt="Responsive image" src="storage/images/{{ $current_produit->image}}" class="product_img">
                                @endif
                            </div>
                                <div class="card-footer text-center mt-n4">
                                    <div class="input-group mb-3">
                                        <div class="custom-file mt-4">
                                            <input type="file" class="custom-file-input" wire:model="image_produit" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choisir</label>
                                            <div wire:loading wire:target="image_produit">Chargement...</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <button type="reset" class="btn btn-warning">Annuler</button>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">
                            @if ($status ==="editProduct")
                                Modifier
                            @else
                                Ajouter
                            @endif
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>

