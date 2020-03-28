<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
// use Validator;


class DataController extends Controller
{
          /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // yaslai include garepaxi guest harule aru access paudainana tara index ra show view chain sabaile herna pauxan
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        return view('pages.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'address'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'country'=>'required',
            'dead'=>'required',
            'recovered'=>'required',


        ]);

        //create post
        $post = new Data;
        $post->address = $request->input('address');
        $post->logitude = $request->input('longitude');
        $post->latitude = $request->input('latitude');
        $post->country = $request->input('country');
        $post->dead = $request->input('dead');
        $post->recovered = $request->input('recovered');

        $post->save();
        return redirect(url('/data'))->with('success','Data Create');

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
        $data = Data::findOrFail($id);
        return view('pages.edit')->with('data',$data);
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
        $this->validate($request,[
            'address'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'country'=>'required',
            'dead'=>'required',
            'recovered'=>'required',

        ]);

        //create post
        $post = Data::find($id);
        $post->address = $request->input('address');
        $post->logitude = $request->input('longitude');
        $post->latitude = $request->input('latitude');
        $post->country = $request->input('country');
        $post->dead = $request->input('dead');
        $post->recovered = $request->input('recovered');

        $post->save();
        return redirect(url('/data'))->with('success','Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect(url('/data'))->with('success','Data Deleted');
    }
}
