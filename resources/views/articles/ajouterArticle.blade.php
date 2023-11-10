@extends("layout.nav")

@extends("layout.nav")
@section("contenue")
@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach($errors->all() as $error)
    <strong>Oh snap!</strong> {{$error}}
    @endforeach
</div>
@endif




<div class="container">
    <div class="row d-flex-justify-content-center align-item-center">
        <div class="col">
            <form action="/categorie/ajouterArticle" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomCategorie" class="form-label mt-4">Nom de l'Article</label>
                    <input type="text" name="titre" class="form-control" id="nomCategorie" placeholder="Article">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label mt-4">Description de L'Article</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="choix" class="form-label mt-4">Choissir un categorie</label>
                    <select class="form-select" id="choix" name="categorie_id">
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nomCategorie}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection("contenue")