<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class AdminController extends Controller
{

    public function index()
    {
        $data = Berita::all();
        return view ('admin.index', compact('data'));
    }

    public function create()
    {
        return view ('admin.create');
    }

    public function store(Request $request)
    {
            $input = $request->all();
            Berita::create($input);
            return redirect('admin');
    }

    public function edit($id)
    {
            $data = Berita::find($id);
            return view ('admin.edit',compact('data'));
    }

    public function update(Request $request)
    {
            $data = Berita::findOrFail($request->id);
            $input = $request->all();
            
            $data->update($input);
            return redirect('admin');
    }

    public function destroy($id)
    {
            $data = Berita::findOrFail($id);
            $data->delete();
            return redirect('admin');
    }
}
