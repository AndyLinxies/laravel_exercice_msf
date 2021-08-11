@extends('layouts.index')
@section('content')
<div class="container">
    <h2>typeformations</h2>
    <form action='/typeformations/{{$edit2->id}}' method='post'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input value="{{$edit2->nom_typeformation}}" name='nom_typeformation' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection