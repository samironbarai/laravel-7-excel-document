<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Post;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function exportExcel()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
}
