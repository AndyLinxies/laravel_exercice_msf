@extends('layouts.index')
@section('content')
<div class="container">
    <h2>Eleves</h2>
    <form action='/eleves/{{$edit->id}}' method='post'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input value="{{$edit->nom_eleves}}" name='nom_eleves' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Prenom</label>
            <input value="{{$edit->prenom_eleves}}" name='prenom_eleves' type="text" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input value="{{$edit->age}}" name='age' type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Etat</label>
            <input value="{{$edit->etat}}" name='etat' type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection