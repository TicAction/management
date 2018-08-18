@extends('layouts.teacher')

@section('content')
<p>
	<h3>Conditions particulières</h3>
</p>


	{!! Form::open(['route'=>'particular_store','method'=>'POST','class'=>'form-horizontal']) !!}

		

		<div class="form-group{{ $errors->has('particular') ? ' has-error' : '' }}">
		    {!! Form::label('particular', 'Conditions particulière') !!}
		    {!! Form::select('particular',[
		    	'Troubles de comportement'=>'Troubles de comportement',
		    	'Académique'=>'Académique',
		    	'Famillial'=>'Famillial',
		    	'Allergie'=>'Allergie',
		    	'Maladie'=>'Maladie',
		    	], null, ['id' => 'particular', 'class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('particular') }}</small>
		</div>
		<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
		    {!! Form::label('comment', 'Commentaire supplémentaire') !!}
		    {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('comment') }}</small>
		</div>

		{!! Form::submit('Soumettre',['class'=>'btn btn-primary'])!!}

	{!! Form::close() !!}
@endsection

