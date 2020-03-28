<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class PagesController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('index')->with('data',$data);
    }
}
