@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>Batiments</h2>
        <a href="/eleves/create" class="btn btn-primary text-white">Creer Batiments</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du batiment</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batiments as $batiment)
                <tr>
                    <td>{{$batiment->id}}</td>
                    <td>{{$batiment->nom_batiment}}</td>
                    <td>{{$batiment->description}}</td>
                    <td>
                        <form action="/batiments/{{$batiment->id}}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white">Supprimer</button>
                        </form>
                    </td>
                    <td><a href="/batiments/{{$batiment->id}}" class="btn btn-success">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
