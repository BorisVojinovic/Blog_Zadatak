@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body">
                        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" id="short_description" cols="5" rows="1" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="body" id="body" cols="20" rows="7" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Publish At</label>
                                <input type="date" name="published_at" class="form-control" value="<?php echo date("Y-m-d");?>">
                            </div>

                            <div class="form-group">
                                <label>Picture</label> <br/>
                                <input type="file" id="picture" name="picture" class="form-control-file">


                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/dzcxrq5pp6gi71mkqhtqm3n6wyykhvwh43xx7idz4jzfglg6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'#body'
        });
    </script>
@endsection
