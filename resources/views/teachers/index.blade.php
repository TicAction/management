@extends('layouts.teacher')
@section('content')


@foreach($schools as $school)

{{$school->schoolboard->schoolboard_name}}<br>
{{$school->school_name}}
@endforeach
@endsection
