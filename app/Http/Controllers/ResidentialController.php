<?php

namespace App\Http\Controllers;

use App\Models\Residential;
use Illuminate\Http\Request;

class ResidentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("residentials.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

        $data = request()->validate([
            'title'=>'required',
            'street'=>'required',
            'city'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'type'=>'required',
            'offer'=>'required',
            'price'=>'required',
            'description'=>'required',
            'file-attachment.*'=>'',
            // 'features.*'=>'required',
        ]);
        dd(request('file-attachment'));
        $imagesPath = request('file-attachment[]')->store('uploads', 'public');

        // auth()->user()->residentials()
        $residential= Residentials::create([
            'title'  => $data['title'],
            'street'  => $data['street'],
            'city'  => $data['city'],
            'bedrooms'  => $data['bedrooms'],
            'bathrooms'  => $data['bathrooms'],
            'type'  => $data['type'],
            'offer'  => $data['offer'],
            'price'  => $data['price'],

        ]);
        $residential->images()->createMany($data['file-attachment']);
        // $residential->images()->createMany($data['file-attachment']);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residential  $residential
     * @return \Illuminate\Http\Response
     */
    public function show(Residential $residential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residential  $residential
     * @return \Illuminate\Http\Response
     */
    public function edit(Residential $residential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residential  $residential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residential $residential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residential  $residential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residential $residential)
    {
        //
    }
}
