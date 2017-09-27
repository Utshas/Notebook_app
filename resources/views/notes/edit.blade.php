@extends('layouts.base')
@section('content')

    <h1>Edit Note</h1>
    <form action="{{route('notes.update',$note->id)}}" method="post">

        {{csrf_field()}}

        {{method_field('PUT')}}

        <div class="form-group">

            <label for="notebook_name">Note Title</label>
            <input class="form-control" type="text"  name="title" value="{{$note->title}}">
            <br>
            <label for="notebook_name">Note Description</label>
            <input class="form-control" type="text"  name="description" value="{{$note->description}}">
            <br>
            <input class="btn btn-primary" type="submit" value="update">
        </div>
    </form>


@endsection('content')