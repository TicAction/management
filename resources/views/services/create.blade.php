@extends('layouts.teacher')

@section('content')


	<h3>Services pour {{$student->firstname}} {{$student->lastname}}</h3>
	{!! Form::open(['method' => 'POST', 'route' => 'service_store', 'class' => 'form-horizontal']) !!}
		{!! Form::hidden('student',$student->id)!!}
		<div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
	<div class="row">
		<div class="col-md-4">
			 {!! Form::label('Services') !!}
	      {!! Form::select('service',[
	      	'Orthopédagogie'=>'Orthopédagogie',
	      	'Psychologie'=>'Psychologie',
	      	'Orthophonie'=>'Orthophonie',
	      	'Suivi médical'=>'Suivi médical',
	      	'Suivi en travail social'=>'Suivi en travail social',
	      	'Feuille de route'=>'Feuille de route',
	      	],null, ['class' => 'form-control', 'required' => 'required']) !!}
	      <small class="text-danger">{{ $errors->first('service') }}</small>
	  		
	   	</div>

	   	<div class="col-md-4">
	   		 <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
	      {!! Form::label('start_date', 'Date du début') !!}
	      {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
	      <small class="text-danger">{{ $errors->first('start_date') }}</small>
	  		</div>
	   	</div>

	   	<div class="col-md-4">
	   		<div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
		    {!! Form::label('end_date', 'Date de la fin') !!}
		    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('end_date') }}</small>
			</div>
		</div>
	</div>
		

	   
	   		 <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	      {!! Form::label('comment', 'Commentaire') !!}
	      {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
	      <small class="text-danger">{{ $errors->first('comment') }}</small>
	  </div>

	

	 
	
	    <div class="btn-group pull-right">
	        
	        {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
@endsection



