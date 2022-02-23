<?php

namespace App\Http\Controllers;

use Dzyfhuba\PostSys\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('article.index', [
            'posts' => $posts,
        ]);
    }
    public function show($title)
    {
        $title = Str::title(str_replace('-', ' ', $title));
        $post = Post::where('title', $title)->first();
        return view('admin.article.show', [
            'post' => $post,
        ]);
    }

    public function getFirstUrl($string)
    {
        preg_match_all("/\((.*?)\)/", $string, $result_array);

        return $result_array[1][0];
    }
}
