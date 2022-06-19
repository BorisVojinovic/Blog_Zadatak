@extends('layouts.admtema')
@section('content')

    <div>
        <h3 style="color:black">{{auth()->post()->title}}</h3>
    </div>

    <div class="col-sm-5 row-cols-2">
        <form method="post" action="" enctype=multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="short_description">short_description:</label>
                <input type="text" name="short_description" class="form-control" id="short_description" value="{{auth()->post()->short_description}}">
            </div>
            <div class="form-group">
                <label for="body">Content:</label>
                <input type="text" name="body" class="form-control" id="body" value="{{auth()->post()->body}}">
            </div>
        </form>
    </div>

@endsection
