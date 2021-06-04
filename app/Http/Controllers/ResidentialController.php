<?php

namespace App\Http\Controllers;

use App\Models\Residential;
use App\Models\Images;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $residential= Residential::latest()->get();
        return view('home', compact('residential'));
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
            // 'file-attachment.*'=>'',
            // 'features.*'=>'required',
        ]);
        $residential= Residential::create([
            'title'  => $data['title'],
            'street'  => $data['street'],
            'city'  => $data['city'],
            'bedrooms'  => $data['bedrooms'],
            'bathrooms'  => $data['bathrooms'],
            'type'  => $data['type'],
            'offer'  => $data['offer'],
            'price'  => $data['price'],

        ]);

        $photos = $request->file('file-attachment');
            foreach ($photos as $image =>$images) {
                    // dd($images);
                
                // dd($upload[$image]);
                $upload[$image] = $images->store('uploads', 'public');
                // dd($upload[$image]);
                $uploadpath = Image::make(public_path("storage/{$upload[$image]}"))->fit(480,320);
                $uploadpath ->save();
                // dd($uploadpath);
                $filepaths = ([
                    'propertyid' =>$residential->id,
                    'imagename'=> $upload[$image],
                ]);
                // $upload[$image] = Image::make($filepaths)->fit(480,320);
                $imagessave = Images::create($filepaths);
            }
            

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
