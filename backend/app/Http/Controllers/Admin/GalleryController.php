<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['travelPackage'])->get();
        
        return view('pages.admin.galleries.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travelPackages = TravelPackage::pluck('title','id')->toArray();

        return view('pages.admin.galleries.create', compact('travelPackages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $travelPackages = TravelPackage::pluck('title','id')->toArray();

        return view('pages.admin.galleries.edit', compact('gallery','travelPackages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  GalleryRequest $request
     * @param  Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();
        Storage::disk('public')->delete($gallery->image);
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $gallery->update($data);
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.gallery.index');
    }
}
