@extends('layouts.index')
@section('content')
{{-- typeformations --}}
<div class="card mx-auto mt-5" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"># {{$show2->id}}</li>
        <li class="list-group-item">nom: {{$show2->nom_typeformation}}</li>
        <li class="list-group-item">
            <form action="/typeformations/{{$show2->id}}" method='post'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-white">Supprimer</button>
            </form>
        </li>
        <li class="list-group-item">
            <a href="/typeformations/{{$show2->id}}/edit" class="btn btn-primary text-white">
                Edit
            </a>
        </li>
    </ul>
</div>
@endsection