@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>Eleves</h2>
        <a href="/eleves/create" class="btn btn-primary text-white">Creer éleve</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Etat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                <tr>
                    <td>{{$eleve->id}}</td>
                    <td>{{$eleve->nom_eleves}}</td>
                    <td>{{$eleve->prenom_eleves}}</td>
                    <td>{{$eleve->age}}</td>
                    <td>{{$eleve->etat}}</td>
                    <td>
                        <form action="/eleves/{{$eleve->id}}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white">Supprimer</button>
                        </form>
                    </td>
                    <td><a href="/eleves/{{$eleve->id}}" class="btn btn-success">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
