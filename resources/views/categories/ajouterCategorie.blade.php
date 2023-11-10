@extends("layout.nav")

@extends("layout.nav")
@section("contenue")
@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  @foreach($errors->all() as $error)
  <strong>Oh snap!</strong>  {{$error}}
  @endforeach
</div>
@endif
    
       
   

<div class="container">
    <div class="row d-flex-justify-content-center align-item-center">
        <div class="col">
            <form action="/categorie/ajouterCategorie" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomCategorie" class="form-label mt-4">Nom de la categorie</label>
                    <input type="text" name="categorie" class="form-control" id="nomCategorie"  placeholder="Categorie">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection("contenue")