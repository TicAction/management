@extends('layouts.teacher')
@section('content')
  <h4>{{$school->schoolboard->schoolboard_name}}</h4>
{{$school->school_name}}

@foreach ($school->users as $user)
  {{$user->name}}
@endforeach

@endsection
