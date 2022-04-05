<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Gallery;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Gallery::all();
        return view('admin.service.create', [
            'images' => $images,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $images = $request->input('images');
        // get filename with the extension of all $images array
        $filenames = array_map(function ($image) {
            // get second part of the string after the last slash
            return basename($image);
        }, $images);

        // $filenames to json
        $filenames = json_encode($filenames);
        // create a new service
        $service = Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'images' => $filenames,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.service.index', [
            'service' => $service,
            'message' => 'Service created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $allImages = Gallery::all();

        $images = $service->images;
        // decode from json
        $images = json_decode($images);
        // dd($images);

        return view("admin.service.edit", [
            "service" => $service,
            "images" => $images,
            "allImages" => $allImages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        // $image to json
        $images = json_encode($request->images);
        // update service
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'images' => $images,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.service.index', [
            'service' => $service,
            'message' => 'Service updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.service.index', [
            'message' => 'Service deleted successfully',
        ]);
    }

    public function toggleStatus($id, $status)
    {
        $service = Service::find($id);
        $service->update([
            'status' => $status
        ]);
        $service = Service::find($id);
        return response()->json($service);
    }
}
