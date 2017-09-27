@extends('layouts.base')
@section('content')

    <h1>Edit Notebook</h1>
    <form action="/notebooks/{{$notebook->id}}" method="post">

        {{csrf_field()}}

        {{method_field('PUT')}}

        <div class="form-group">

            <label for="notebook_name">Notebook Name</label>
            <input class="form-control" type="text"  name="notebook_name" value="{{$notebook->notebook_name}}">
            <br>
            <input class="btn btn-primary" type="submit" value="update">
        </div>
    </form>


@endsection('content')