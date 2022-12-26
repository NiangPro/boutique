<div class="card mt-2 card-warning">
    <div class="card-body">
        <div class="section-title mt-0"><strong>Liste des Produits</strong></div>
        <div class="table-responsive">
            <table class="table table-striped" id="table-2">
            <thead>
                <tr>
                   
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Categories</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $prod)
                    <tr>
                        <td>
                            {{$prod->nom}}
                        </td>
                        <td>{{$prod->description}}</td>
                        <td>{{$prod->prix}}</td>
                        <td>
                            @foreach ($prod->categories as $cat)
                                {{$cat->name}}
                            @endforeach
                        </td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>