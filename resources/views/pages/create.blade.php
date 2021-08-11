@extends('layouts.index')
@section('content')
    <div class="container">
        <form action='/eleves' method='post'>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input name='nom_eleves' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Prenom</label>
                <input name='prenom_eleves' type="text" class="form-control" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Age</label>
                <input name='age' type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Etat</label>
                <input name='etat' type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
