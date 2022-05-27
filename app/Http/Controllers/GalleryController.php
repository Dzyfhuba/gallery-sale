<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('updated_at', 'desc')->get();
        return view('gallery.index', [
            'galleries' => $galleries,
        ]);
    }
}
