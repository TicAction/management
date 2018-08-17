@extends('layouts.teacher')

@section('content')

@if(Auth::user()->groups)
<table class="table">
  <tr>
    <th>Nom de l'enseignant</th>
    <th>Code pour ce groupe</th>
    <th>Nom du groupe</th>

  </tr>
  @foreach ($groups as $group)
  <tr>

    <td>{{$group->user->name}}</td>
    <td>{{$group->group_code}}</td>
    <td>{{strToUpper($group->group_name)}}</td>
    <td></td>ube

  </tr>
  @endforeach
</table>
@endif

@endsection
