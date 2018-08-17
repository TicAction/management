@extends('layouts.teacher')


@section('content')


<h4>Élève de ma classe</h4>

<table class="table table-striped table-sm">
    <tr>
        <th>Prénom et nom</th>
        <th>Anniversaire</th>
        <th>Actions</th>

    </tr> 
    @foreach(Auth::user()->students as $student)
    <tr>
        <td>{{$student->fullname}}</td>
        <td>{{$student->anniversary->format('d - M - Y')}}</td>
        <td>
            <a href="{{route('student_edit',$student->id)}}"><button class="btn btn-info btn-sm">Modifier la fiche</button> </a>

            {!! Form::open(['action' => ['StudentController@destroy', $student->id],'method'=>'DELETE','style' => 'display:inline' ]) !!}

            {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-sm']) !!}

            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>



@endsection
