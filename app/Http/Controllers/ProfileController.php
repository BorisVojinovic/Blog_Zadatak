<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(User $user){

        return view('HtmlTema.profile');
    }

    public function blog(Post $post){

        $posts = Post::all();

        return view('HtmlTema.blog', compact('posts'));
    }
}
