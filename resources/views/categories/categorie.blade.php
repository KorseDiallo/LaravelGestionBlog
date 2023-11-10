@extends("layout.nav")
@section("contenue")
<div class="container my-4">
    <div class="row d-flex-justify-content-center align-item-center">
        <div class="col-md-4">
            <ul class="list-group">
                @foreach($categories as $categorie)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$categorie->nomCategorie}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>




@endsection("contenue")