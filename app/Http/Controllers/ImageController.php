<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageOptimizer;
use Illuminate\Support\Facades\Storage;
use Buglinjo\LaravelWebp\Facades\Webp;

class ImageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $filename = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();


// the image will be replaced with an optimized version which should be smaller
            $path = $file->storeAs('public', $filename);

            $com = ImageOptimizer::optimize(storage_path().'/app/'.$path);
            // $path = $file->storeAs('public/', $com.'opt'.'.'.$ext);
 Webp::make($request->file('filename'))->save(storage_path().'/app/');


            dd($path);

        }
        else{
            return "file not uploaded";
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
