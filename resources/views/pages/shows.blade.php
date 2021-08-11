@extends('layouts.index')
@section('content')
<div class="container">
        {{-- Eleves --}}
        <div class="card mx-auto mt-5" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"># {{$show->id}}</li>
                <li class="list-group-item">nom: {{$show->nom_eleves}}</li>
                <li class="list-group-item">prenom: {{$show->prenom_eleves}}</li>
                <li class="list-group-item">age: {{$show->age}}</li>
                <li class="list-group-item">etat: {{$show->etat}}</li>
                <li class="list-group-item">
                    <form action="/eleves/{{$show->id}}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white">Supprimer</button>
                    </form>
                </li>
                <li class="list-group-item">
                    <a href="/eleves/{{$show->id}}/edit" class="btn btn-primary text-white">
                        Edit
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endsection
