<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $chefs = Chef::all();
        return view('chef.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
        public function create(){
        return view('chef.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
        public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'keahlian' => 'required',
            'image' => 'required',
        ]);
        $imageName = $request->file('image')->hashName();
        $data['image'] = $imageName;
        $chefsDirectory = public_path() . '/gambar';
        $request -> file('image') -> move($chefsDirectory, $imageName);

        Chef::create($data);
        return redirect()-> to('chef');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $chefs = Chef::find($id);
        return view('chef.edit', compact('chefs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'sometimes',
            'keahlian' => 'sometimes',
            'image' => 'sometimes',
        ]);

        $chef = Chef::find($id);
        if($request->hasFile('image')){
            File::delete(public_path(), "/gambar");
        $imageName = $request->file('image')->hashName();
        $data['image'] = $imageName;
        $chefsDirectory = public_path() . '/gambar';
        $request -> file('image') -> move($chefsDirectory, $imageName);
        }
        $chef->update($data);
        return redirect()-> to('chef');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chef = Chef::find($id);

        File::delete(public_path(), "/gambar");
        $chef->delete();

        return redirect()-> to('chef');
    }
}
