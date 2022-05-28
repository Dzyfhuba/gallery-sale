<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\Service;
use Dzyfhuba\PostSys\Models\Post;
use Illuminate\Http\Request;

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
        $services = Service::where('status', 1)->get()->sortBy('updated_at')->reverse()->take(5);

        // get random images from $services[n]->images
        $images = [];

        // json decode $services[n]->images
        foreach ($services as $service) {
            $images[] = json_decode($service->images);
            $service->images = $images;
        }

        $articles = Post::where('status', 1)->orderBy('updated_at', 'desc')->get()->take(5);

        $galleries = Gallery::orderBy('updated_at', 'desc')->get()->take(5);

        $contact = ContactUs::first();

        return view('home', [
            'services' => $services,
            'articles' => $articles,
            'galleries' => $galleries,
            'contact' => $contact,
        ]);
    }
}
