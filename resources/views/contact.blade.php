@extends('layouts.app')

@section('content')
	<h2 style="margin-top: 20px;">CONTACT</h2>
	{!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('name', 'Name')}}
    		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('email', 'E-Mail Address')}}
    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter E-mail Address'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('message', 'Message')}}
    		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Comment'])}}
    	</div>

    	<div class="form-group">
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection