@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>formations</h2>
        <a href="/eleves/create" class="btn btn-primary text-white">Creer formations</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du formation</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                <tr>
                    <td>{{$formation->id}}</td>
                    <td>{{$formation->nom_formation}}</td>
                    <td>{{$formation->description}}</td>
                    <td>
                        <form action="/formations/{{$formation->id}}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white">Supprimer</button>
                        </form>
                    </td>
                    <td><a href="/formations/{{$formation->id}}" class="btn btn-success">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
