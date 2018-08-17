@extends('layouts.teacher')

@section('content')

	<h3>Service particuliers</h3>
	{!! Form::open(['method' => 'POST', 'route' => 'service_store', 'class' => 'form-horizontal']) !!}
	
	{{csrf_field()}}
	{!! Form::hidden('student_id', '1') !!}
	   
	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('ortho') ? ' has-error' : '' }}">
	            <label for="ortho">
	                {!! Form::checkbox('ortho', '1', null, ['id' => 'ortho']) !!} Orthopédagogie
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('ortho') }}</small>
	    </div>

	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('psy_ed') ? ' has-error' : '' }}">
	            <label for="psy_ed">
	                {!! Form::checkbox('psy_ed', '1', null, ['id' => 'psy_ed']) !!} Psychoéducation
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('psy_ed') }}</small>
	    </div>

	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('ts') ? ' has-error' : '' }}">
	            <label for="ts">
	                {!! Form::checkbox('ts', '1', null, ['id' => 'ts']) !!} Travailleuse sociale
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('ts') }}</small>
	    </div>

	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('psycho') ? ' has-error' : '' }}">
	            <label for="psycho">
	                {!! Form::checkbox('psycho', '1', null, ['id' => 'psycho']) !!} Physchologie
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('psycho') }}</small>
	    </div>

	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('sdg') ? ' has-error' : '' }}">
	            <label for="sdg">
	                {!! Form::checkbox('sdg', '1', null, ['id' => 'sdg']) !!} Services de garde
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('sdg') }}</small>
	    </div>

	    <div class="form-group">
	        <div class="checkbox{{ $errors->has('pi') ? ' has-error' : '' }}">
	            <label for="pi">
	                {!! Form::checkbox('pi', '1', null, ['id' => 'pi']) !!} Plan d'intervention
	            </label>
	        </div>
	        <small class="text-danger">{{ $errors->first('pi') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	        {!! Form::label('comment', 'Commentaire') !!}
	        {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('comment') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        
	        {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
@endsection



