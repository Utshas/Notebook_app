@extends('layouts.base')
@section('content')

    <h1>Create Note</h1>
    <form action="{{route('notes.store')}}" method="post">

        {{csrf_field()}}

        <div class="form-group">

            <label for="title">Notebook Title</label>
            <input class="form-control" type="text"  name="title">
            <br>
            <label for="description">Notebook Description</label>
            <input class="form-control" type="text"  name="description">
            <input class="form-control" type="hidden"  name="notebook_id" value="{{$id}}">
            <br>
            <input class="btn btn-primary" type="submit" value="create">
        </div>
    </form>


@endsection('content')