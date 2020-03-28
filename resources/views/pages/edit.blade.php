@extends('layouts.app')

@section('content')
<h1>Edit Data</h1>
{!! Form::open(['action'=>['DataController@update',$data->id],'method'=>'POST']) !!}

    <div class ="form-group">
    	{{Form::label('address','Address')}}
    	{{Form::text('address',$data->address, ['class'=>'form-control','placeholder'=>'Address'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('longitude','Logitude')}}
    	{{Form::text('longitude',$data->logitude, ['class'=>'form-control','placeholder'=>'Longitude'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('latitude','Latitude')}}
    	{{Form::text('latitude',$data->latitude, ['class'=>'form-control','placeholder'=>'Latitude'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('country','Country')}}
    	{{Form::text('country','nepal', ['class'=>'form-control','placeholder'=>'Country'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('dead','Dead')}}
    	{{Form::text('dead',$data->dead, ['class'=>'form-control','placeholder'=>'Dead'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('recovered','Recovered')}}
    	{{Form::text('recovered',$data->recovered, ['class'=>'form-control','placeholder'=>'Recovered'])}}

    </div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Update',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
