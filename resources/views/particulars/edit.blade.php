@extends('layouts.teacher')

@section('content')
<p>
	<h3>Conditions particulières</h3>
</p>




	{!! Form::model($particular,['route'=>['particular_update',$particular->id],'method' => 'PUT','class'=>'form-horizontal']) !!}
	
		{{csrf_field()}}
		<div class="form-group{{ $errors->has('behavior') ? ' has-error' : '' }}">
		    {!! Form::label('behavior', 'Troubles de comportement') !!}
		    {!! Form::text('behavior', $particular->behavior, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('behavior') }}</small>
		</div>	

		<div class="form-group{{ $errors->has('academic') ? ' has-error' : '' }}">
		    {!! Form::label('academic', "Difficultés d'apprenstissage") !!}
		    {!! Form::text('academic', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('academic') }}</small>
		</div>

		<div class="form-group{{ $errors->has('famillial') ? ' has-error' : '' }}">
		    {!! Form::label('famillial', 'Milieu familial dysfonctionnel') !!}
		    {!! Form::text('famillial', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('famillial') }}</small>
		</div>

		<div class="form-group{{ $errors->has('allergy') ? ' has-error' : '' }}">
		    {!! Form::label('allergy', 'Allergies') !!}
		    {!! Form::text('allergy', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('allergy') }}</small>
		</div>

		<div class="form-group{{ $errors->has('disease') ? ' has-error' : '' }}">
		    {!! Form::label('disease', 'Maladie') !!}
		    {!! Form::text('disease', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('disease') }}</small>
		</div>

		<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
		    {!! Form::label('comment', 'Commentaire supplémentaire') !!}
		    {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('comment') }}</small>
		</div>

		{!! Form::submit('Soumettre',['class'=>'btn btn-primary'])!!}

	{!! Form::close() !!}
@endsection




