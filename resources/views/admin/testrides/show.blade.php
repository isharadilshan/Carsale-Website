@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admn/bower_components/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    

<div class="content-wrapper">
    <div class="container">
        <h1>{{$testrides->name}}</h1>
        <p>Ref No: {{$testrides->id}}</p>
        <p>Email: {{$testrides->email}}</p>
        <p>Telephone: {{$testrides->telephone}}</p>
        <p>Date: {{$testrides->start_date}}</p>
        <hr>
        
        {!!Form::open(['action' => ['ShowtestridesComtroller@destroy', $testrides->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>

</div>
@endsection
 