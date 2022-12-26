<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if ($status ==='listProduct')
        <button wire:click.prevent="changeEtat('addProduct')" class="btn btn-warning mb-2" > <i class="fa fa-plus" aria-hidden="true"></i> Ajout</button>
    @endif
    @if ($status ==="addProduct")
        @include('livewire.produit.add')
    @elseif($status ==="listProduct")
        @include('livewire.produit.listProduits')
    @elseif($status ==="editProduct")
        @include('livewire.produit.add')
    @endif
</div>

@section('js')
    <script>

        window.addEventListener('addSuccessful', event =>{
            iziToast.success({
            title: 'Produit et Service',
            message: 'Ajout avec succes',
            position: 'topRight'
            });
        });

        window.addEventListener('updateSuccessful', event =>{
            iziToast.success({
            title: 'Produit et Service',
            message: 'Mis à jour avec succes',
            position: 'topRight'
            });
        });

        window.addEventListener('typeEmpty', event =>{
            iziToast.error({
            title: 'Type',
            message: 'Veullez choisir untype',
            position: 'topRight'
            });
        });

        window.addEventListener('noImage', event =>{
            iziToast.error({
            title: 'Type',
            message: 'Veullez choisir une image',
            position: 'topRight'
            });
        });

        window.addEventListener('deleteSuccessful', event =>{
            iziToast.success({
            title: 'Produit et Service',
            message: 'Suppression avec succes',
            position: 'topRight'
            });

            $('#message').hide();
        });
        window.addEventListener('imageEditSuccessful', event =>{
        iziToast.success({
        title: 'Image',
        message: 'Modification avec succéss',
        position: 'topRight'
        });

        $('#message').hide();
    });
    </script>
@endsection
