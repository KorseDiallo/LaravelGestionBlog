@extends('layout.nav')
@section('contenue')
<div class="container my-4 ">
    <div class="row d-flex justify-content-center align-items-center">
        @foreach($articles as $article )
        <div class="card col-md-3 m-3">
            <h3 class="card-header">{{$article->titre}}</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
            </svg>
            <div class="card-body">
                @foreach($categories as $categorie)
                @if($categorie->id==$article->categorie_id)
                <p class="card-text">{{$categorie->nomCategorie}}</p>
                @endif
                @endforeach
            </div>
            <div class="card-body">
                <a href='/article/{{$article->id}}' class="card-link btn btn-outline-secondary">Voir Plus</a>
                <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
            <div class="card-footer text-muted">
                {{$article->created_at}}
            </div>
        </div>
        @endforeach

       

    </div>
</div>
</div>
@endsection()