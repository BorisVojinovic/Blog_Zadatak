<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        // $this->middleware('auth');
    }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
    {
        $posts = Post::paginate(4);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = request()->validate([
           'title' => 'required',
            'picture' => 'file',
            'body' => 'required',
            'short_description' => 'required',
        ]);

        if(request('picture')){
            $inputs['picture'] = request('picture')->store('images');
        }

        auth()->user()->posts()->create($inputs);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Request $request)
    {
        $post = Post::findOrFail($request->id);

//        dd($post);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $name = Post::findOrFail($request->id)->picture;

        if($request->file('picture')){
            $file = $request->file('picture');

            $name = time().$file->getClientOriginalName();

            $file->move('images', $name);
        }
        $post = Post::findOrFail($request->id)->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'body' => $request->body,
            'picture' => $request->picture,
            'published_at' => $request->published_at,
        ]);

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        $post->where('id', $request->id)->delete();

        return redirect('/posts');
    }
}
