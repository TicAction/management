@extends('layouts.teacher')

@section('content')
    <div class="col-md-9">

        <h5>Ajouter un élève</h5>
        <hr>
        {!! Form::model($student, ['route'=>['student_update',$student->id],'class'=>'form-horizontal']) !!}
        {!! Form::hidden('_method','PUT') !!}
        <div class="form-group">
            {!! Form::label('firstname','Prénom') !!}
            {!! Form::text('firstname',$student->firstname, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastname','Nom de famille') !!}
            {!! Form::text('lastname',$student->lastname, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('anniversary','Anniversaire') !!}
            {!! Form::date('anniversary',$student->anniversary, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Soumettre',['class'=>'btn btn-primary']) !!}




        {!! Form::close() !!}
    </div>
@endsection

