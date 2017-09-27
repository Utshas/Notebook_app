@extends('layouts.base')
 @section('content')

    <h1>Create Notebook</h1>
    <form action="/notebooks" method="post">

        {{csrf_field()}}

        <div class="form-group">

            <label for="notebook_name">Notebook Name</label>
            <input class="form-control" type="text"  name="notebook_name">
<br>
            <input class="btn btn-primary" type="submit" value="create">
        </div>
    </form>


 @endsection('content')