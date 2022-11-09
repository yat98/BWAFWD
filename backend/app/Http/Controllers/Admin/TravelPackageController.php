<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();
        
        return view('pages.admin.travel-packages.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TravelPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        TravelPackage::create($data);
        return redirect()->route('admin.travel-package.index');
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
     * @param  TravelPackage $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelPackage $travelPackage)
    {
        return view('pages.admin.travel-packages.edit', compact('travelPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TravelPackageRequest  $request
     * @param  TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, TravelPackage $travelPackage)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $travelPackage->update($data);
        return redirect()->route('admin.travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
