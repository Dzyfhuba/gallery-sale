<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->get()->sortBy('updated_at')->reverse()->values();

        // get random images from $services[n]->images
        $images = [];

        // json decode $services[n]->images
        foreach ($services as $service) {
            $images[] = json_decode($service->images);
            $service->images = $images;
        }
        return view('service.index', compact('services'));
    }
}
