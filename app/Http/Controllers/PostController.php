<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Inertia\Inertia;

use ProtoneMedia\LaravelQueryBuilderInertiaJs\InertiaTable;


class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user:id,name') 
        ->with('categories:slug,name')
        ->paginate(10);

    return Inertia::render('Posts/Index', ['posts' => $posts]);

    }

}
