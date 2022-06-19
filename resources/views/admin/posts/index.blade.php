
@extends('layouts.admtema')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-12">
                <a href="post/create" class="btn btn-primary mb-2">Create Post</a>
                <br>
                <table class="table table-bordered">
                    <thead>
                    <form>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Published At</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id }}</td>
                            <td>{{$post->user_id}}</td>
                            <td>{{$post->title }}
                            <td>{{$post->short_description}}</td>
                            <td>{{$post->picture}}</td>
                            <td>{{ date('d-m-y', strtotime($post->published_at)) }}</td>
                            <td>
                                <form action="{{route('post-edit', $post->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('get')
                                    <button class="btn btn-primary editBtn" type="submit">Edit</button>
                                </form>
                                <form action="{{route('post-destroy', $post->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
            <span> {{ $posts->links() }} </span>
        </div>
    </div>
@endsection

