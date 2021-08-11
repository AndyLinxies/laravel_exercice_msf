@extends('layouts.index')
@section('content')
{{-- Formations --}}
<div class="card mx-auto mt-5" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"># {{$show2->id}}</li>
        <li class="list-group-item">nom: {{$show2->nom_formation}}</li>
        <li class="list-group-item">description: {{$show2->description}}</li>
        <li class="list-group-item">
            <form action="/formations/{{$show2->id}}" method='post'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-white">Supprimer</button>
            </form>
        </li>
        <li class="list-group-item">
            <a href="/formations/{{$show2->id}}/edit" class="btn btn-primary text-white">
                Edit
            </a>
        </li>
    </ul>
</div>
@endsection