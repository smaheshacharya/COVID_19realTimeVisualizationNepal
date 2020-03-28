@extends('layouts.app')
@section('content')
<h3>novel COVID-19 Date Set</h3>
<a href="{{url('data')}}/create" class="btn btn-sm btn-danger">Create</a>
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
    <table class="table table-striped ">
        <tr>
            <th>ID</th>
            <th>Address</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th colspan="2">Action</th>
            <th></th>
        </tr>
        @foreach ($data as $dt)
            <tr>
            <td>{{$dt->id}}</td>
            <td>{{$dt->address}}</td>
            <td>{{$dt->logitude}}</td>
            <td>{{$dt->latitude}}</td>
            <td><a href="{{url('data')}}/{{$dt->id}}/edit" class="btn btn-sm btn-primary" style="margin:10px">Edit</a><br>
            {!!Form::open(['action'=>['DataController@destroy',$dt->id], 'method'=>'POST'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}

        {!!Form::close()!!}
    </td>
            </tr>
        @endforeach
    </table>
@endsection
