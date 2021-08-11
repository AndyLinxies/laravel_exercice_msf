@extends('layouts.index')
@section('content')
<div class="container">
    <h2>formations</h2>
    <form action='/formations/{{$edit2->id}}' method='post'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input value="{{$edit2->nom_formation}}" name='nom_formation' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input value="{{$edit2->description}}" name='description' type="text" class="form-control" id="exampleInputPassword1" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection