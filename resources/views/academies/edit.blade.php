@extends('layouts.teacher')

@section('content')
<h3>Académique</h3>
<hr>



	{!! Form::model($academy, ['route' => ['academy_update', $academy->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
	{{csrf_field()}}
<div class="row">
	{!! Form::hidden('student_id','1')!!}
	<div class="col-md-6">
	 <div class="form-group{{ $errors->has('reading') ? ' has-error' : '' }}">
        {!! Form::label('reading', 'Français écriture') !!}
        {!! Form::select('reading',[
        	'Retard'=>'Retard',
        	'Faible'=>'Faible',
        	'Moyen'=>'Moyen',
        	'Fort'=>'Fort',

        	] , $academy->reading,['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('reading') }}</small>
    </div>		

 <div class="form-group{{ $errors->has('writing') ? ' has-error' : '' }}">
        {!! Form::label('writing', 'Français lecture') !!}
        {!! Form::select('writing', [
        	'Retard'=>'Retard',
        	'Faible'=>'Faible',
        	'Moyen'=>'Moyen',
        	'Fort'=>'Fort',

        	],$academy->writing, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('writing') }}</small>
    </div>	
</div>
   
 <div class="col-md-6">
 	<div class="form-group{{ $errors->has('concept') ? ' has-error' : '' }}">
        {!! Form::label('concept', 'Mathématique concept') !!}
        {!! Form::select('concept', [
        	'Retard'=>'Retard',
        	'Faible'=>'Faible',
        	'Moyen'=>'Moyen',
        	'Fort'=>'Fort',

        	],$academy->concept, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('concept') }}</small>
    </div>		

 <div class="form-group{{ $errors->has('problem') ? ' has-error' : '' }}">
        {!! Form::label('problem', 'Mathématique résoudre') !!}
        {!! Form::select('problem', [
        	'Retard'=>'Retard',
        	'Faible'=>'Faible',
        	'Moyen'=>'Moyen',
        	'Fort'=>'Fort',

        	],$academy->problem, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('problem') }}</small>
    </div>	

    <div class="form-group{{ $errors->has('english') ? ' has-error' : '' }}">
        {!! Form::label('english', 'Anglais') !!}
        {!! Form::select('english', [
        	'Retard'=>'Retard',
        	'Faible'=>'Faible',
        	'Moyen'=>'Moyen',
        	'Fort'=>'Fort',

        	],$academy->english, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('english') }}</small>
    </div>	
</div>
 </div>
      <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
          {!! Form::label('comment', 'Commentaire') !!}
          {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
          <small class="text-danger">{{ $errors->first('comment') }}</small>
      </div>

    <div class="btn-group pull-right">
      
        {!! Form::submit("Modidier", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}


@endsection

