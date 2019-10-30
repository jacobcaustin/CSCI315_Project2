<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asset;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assets = Assets::all();
        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('assets.create');
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
        $validated = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'required' ,
            'value' => 'numeric',
            'purchased' => 'date',
        ]);
        $item = Asset::create($validated);
        
        return redirect('/assets')->with('success', 'Item was saved');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.show', compact('asset'));
        return view('assets.show', array('asset' => $asset));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        @asset = Asset::findOrFail($id);
        return view('assets.edit', compact('asset'));
        
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
         $validated = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'required' ,
            'value' => 'numeric',
            'purchased' => 'date',
        ]);
        Asset::whereId($id)->update($validated);
        
        
        return redirect('assets')->with('success', 'Asset Information Updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        
        return redirect('/assets')->('success', 'Asset was deleted forever');
    }
}
