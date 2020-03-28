@extends('layouts.app')

@section('content')
<h1>Create Data</h1>
{!! Form::open(['action'=>'DataController@store','method'=>'POST']) !!}

    <div class ="form-group">
    	{{Form::label('address','Address')}}
    	{{Form::text('address','', ['class'=>'form-control','placeholder'=>'Address'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('longitude','Logitude')}}
    	{{Form::text('longitude','', ['class'=>'form-control','placeholder'=>'Longitude'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('latitude','Latitude')}}
        {{Form::text('latitude','', ['class'=>'form-control','placeholder'=>'Latitude'])}}
        <a href="https://www.latlong.net/" target="_blank" class="btn btn-default">Get Location id</a>

    </div>
    <div class ="form-group">
    	{{Form::label('country','Country')}}
    	{{Form::text('country','nepal', ['class'=>'form-control','placeholder'=>'Country'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('dead','Dead')}}
    	{{Form::text('dead','', ['class'=>'form-control','placeholder'=>'Dead'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('recovered','Recovered')}}
    	{{Form::text('recovered','', ['class'=>'form-control','placeholder'=>'Dead'])}}

    </div>


    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
