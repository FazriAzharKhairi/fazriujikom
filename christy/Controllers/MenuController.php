<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
        public function create(){
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
        public function store(Request $request){
        $data = $request->validate([
            'nama_makanan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'image' => 'required',
        ]);
        $imageName = $request->file('image')->hashName();
        $data['image'] = $imageName;
        $menusDirectory = public_path() . '/gambar';
        $request -> file('image') -> move($menusDirectory, $imageName);

        Menu::create($data);
        return redirect()-> to('menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $menu = Menu::find($id);
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_makanan' => 'sometimes',
            'deskripsi' => 'sometimes',
            'harga' => 'sometimes',
            'image' => 'sometimes',
        ]);

        $menu = Menu::find($id);
        if($request->hasFile('image')){
            File::delete(public_path(), "/gambar");
        $imageName = $request->file('image')->hashName();
        $data['image'] = $imageName;
        $menusDirectory = public_path() . '/gambar';
        $request -> file('image') -> move($menusDirectory, $imageName);
        }
        $menu->update($data);
        return redirect()-> to('menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);

        File::delete(public_path(), "/gambar");
        $menu->delete();

        return redirect()-> to('menu');
    }
}
