@extends('layouts.main')

@section('content')
<div class="text-center">

    <a href="{{url('/login')}}"><button class="btn btn-lg btn-danger">J'ai déjà un compte</button></a>

    <a href="{{url('/register')}}"><button class="btn btn-lg btn-danger">Je veux créer un compte</button></a>
</div>
@endsection
