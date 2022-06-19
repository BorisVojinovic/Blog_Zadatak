<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        $posts = Post::latest()->take(5)->get();

        return view('HtmlTema.index', compact('posts'));
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
