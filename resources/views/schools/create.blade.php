@extends('layouts.teacher')
@section('content')
  <div class="col-md-9">

      <h5>Ajouter une école</h5>
      <hr> {!! Form::open(['action'=>'SchoolController@store','method '=>'POST ','class '=>'form-horizontal ']) !!}
          <div class="form-group">
              {!! Form::label('school_name', "Nom de l'école") !!}
              {!! Form::text('school_name',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('school_region','Région administrative ') !!}
              {!! Form::text('school_region',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('school_adress','Adresse ') !!}
              {!! Form::text('school_adress',null, ['class ' => 'form-control ']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('school_city','Ville ou village ') !!}
              {!! Form::text('school_city',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('school_phone','Numéro de téléphone ') !!}
              {!! Form::text('school_phone',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('school_email','Courriel ') !!}
              {!! Form::text('school_email',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('school_url','Site web ') !!}
              {!! Form::text('school_url',null, ['class ' => 'form-control ']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('schoolboard_id','Commission scolaire ') !!}
              {!! Form::select('schoolboard_id',$schoolboards,null, ['class ' => 'form-control ']) !!}
          </div>

          {!! Form::submit('Soumettre ',['class '=>'btn btn-primary ']) !!}




          {!! Form::close() !!}
      </div>
  </div>
@endsection
