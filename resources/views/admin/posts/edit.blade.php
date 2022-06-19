@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Post') }}</div>

                    <div class="card-body">
                        <form action="{{route('post-update',$post->id)}}" method="post">
                            @csrf
                            @method('Patch')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id='title' class="form-control" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" name="short_description" id="short_description" value="{{$post->short_description}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="body" id="body" rows="12" class="form-control">{{$post->body}}</textarea>
                            </div>
                            <br/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
