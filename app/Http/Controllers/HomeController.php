<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class HomeController extends Controller
{
    public function index()
    {
    	$data = Berita::all();
        return view ('index', compact('data'));
    }
}
