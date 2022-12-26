<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if ($status ==="list")
        <button  class="btn btn-warning mb-2" wire:click.prevent="changeStatus('add')"> <i class="fa fa-plus" aria-hidden="true"></i> Ajout</button>
        <div class="card mt-2 card-warning">
            <div class="card-body">
                <div class="section-title mt-0"><strong>Liste des categorie</strong></div>
                <div class="table-responsive">
                    <table class="table table-hover" id="table-2">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                            <tr>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>
                                    <div class="d-flex">
                                        <button  class="btn btn-icon btn-outline-info btn-sm" wire:click.prevent="getCategorie({{$cat->id}})"><i class="far fa-eye"></i></button>
                                            <button  class="btn ml-1 btn-icon btn-outline-danger btn-sm  
                                            trigger--fire-modal-1" wire:click.prevent="delete({{$cat->id}})" data-confirm-yes="remove()"><i class="fa fa-trash"></i></button>
                                           
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
    <div class="card mt-2 card-primary">
        <div class="card-header">
            <h4>
                Formulaire 
                @if ($status ==="edit")
                    de modification catégorie
                 @else
                    d'ajout catégorie
                @endif</h4>
            <div class="card-header-action">
              <div class="btn-group">
                  <button  class="btn btn-primary"  wire:click.prevent="back"><i class="fa fa-list"></i> Liste</button>
              </div>
            </div>
        </div>
        <div class="card-body container col-md-4 mt-0">
            <form wire:submit.prevent="store">
                <div class="form-group">
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">Nom<span class="text-danger">*</span></div>
                              </div>
                              <input type="text" class="form-control @error('form.name') is-invalid
                                @enderror" placeholder="Nom catégorie" wire:model="form.name">
                                @error('form.name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    @if ($status ==="add") 
                        <button type="submit" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i>
                        Ajouter 
                        </button>
                    @endif
                    @if ($status ==="edit") 
                        <button type="submit" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>
                            modifier 
                        </button>
                    @endif
                    <button type="reset" class="btn btn-warning">Annuler</button>
            </form>
        </div>
    </div>
    @endif
</div>


@section('js')
    <script>

        window.addEventListener('addSuccessful', event =>{
            iziToast.success({
            title: 'Catégorie',
            message: 'Ajout avec succes',
            position: 'topRight'
            });
        });

        window.addEventListener('updateSuccessful', event =>{
            iziToast.success({
            title: 'Catégorie',
            message: 'Mis à jour avec succes',
            position: 'topRight'
            });
        });

        window.addEventListener('deleteSuccessful', event =>{
            iziToast.success({
            title: 'Catégorie',
            message: 'Suppression avec succes',
            position: 'topRight'
            });

            $('#message').hide();
        });
        
    </script>
@endsection