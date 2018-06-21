@extends('layouts.teacher')



@section('content')
<div class="row">

    <div class="col-md-3">
        <h5>Liste des élèves inscrits</h5>
        <ul class="">

            @foreach($students as $student)

            <li> {{$student->fullname}}</li>

            @endforeach



        </ul>



    </div>
    <div class="col-md-9">

        <h5>Ajouter un élève</h5>
        <hr> {!! Form::open(['action'=>'StudentController
        @store ','method '=>'POST ','class '=>'form-horizontal ']) !!}
            <div class="form-group">
                {!! Form::label('firstname ','Prénom ') !!}
                {!! Form::text('firstname ',null, ['class ' => 'form-control ']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('lastname ','Nom de famille ') !!}
                {!! Form::text('lastname ',null, ['class ' => 'form-control ']) !!}
            </div>

            {{--<div class="form-group">--}}
                {{--{!! Form::label('code ','code ') !!}--}}
                {{--{!! Form::text('code ',null, ['class ' => 'form-control ']) !!}--}}
            {{--</div>--}}
            <div class="form-group">
                {!! Form::label('anniversary ','Anniversaire ') !!}
                {!! Form::date('anniversary ',null, ['class ' => 'form-control ']) !!}
            </div>

            {!! Form::submit('Soumettre ',['class '=>'btn btn-primary ']) !!}




            {!! Form::close() !!}
        </div>
    </div>





@endsection
