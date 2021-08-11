@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>typeformations</h2>
        <a href="/eleves/create" class="btn btn-primary text-white">Creer typeformations</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du typeformations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($typeformations as $typeformation)
                <tr>
                    <td>{{$typeformation->id}}</td>
                    <td>{{$typeformation->nom_typeformation}}</td>
                    <td>
                        <form action="/typeformations/{{$typeformation->id}}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white">Supprimer</button>
                        </form>
                    </td>
                    <td><a href="/typeformations/{{$typeformation->id}}" class="btn btn-success">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
