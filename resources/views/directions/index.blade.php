@extends('layouts.teacher')

@section('content')

  {!! Form::open(['method' => 'POST', 'route' => 'direction_index', 'class' => 'form-horizontal']) !!}

      <div class="form-group{{ $errors->has('student') ? ' has-error' : '' }}">
          {!! Form::label('student', 'Input label') !!}
          {!! Form::text('student', null, ['class' => 'form-control', 'required' => 'required']) !!}
          <small class="text-danger">{{ $errors->first('student') }}</small>
      </div>

      <div class="btn-group pull-right">
          {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
          {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
      </div>
  {!! Form::close() !!}

@endsection
