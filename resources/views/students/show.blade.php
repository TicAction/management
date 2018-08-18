@extends('layouts.teacher')

@section('content')

<p>
	<div class="row">
		<div class="col-md-6">
			<h4>{{$student->firstname}} {{$student->lastname}}</h4>
		</div>
		<div class="col-md-2">
			<a href="{{ route('service_create',$student->id)}}"><button class="btn btn-primary">Ajouter des services</button></a>
		</div>
		<div class='col-md-2'>
			<a href="#"><button class="btn btn-primary">Conditions particuliers</button></a>
		</div>
		<div class='col-md-2'>
			<a href="#"><button class="btn btn-primary">Situation acdémique</button></a>
		</div>

	</div>
	
</p>
<div class="row">
	<div class="col-md-4">
	<h4>Profil académique</h4>
	
	<h6>Français lecture</h6>
	{{$student->academy->reading}}
	
</div>


<div class="col-md-4">
	<h4>Services offerts</h4>
@foreach($student->services as $st)
		
		<br>
		<h6>{{$st->service}} 
			<small>
				<a href="{{route('service_edit',$st->id)}}">
		<button class="btn btn-success btn-sm">Modifier</button>
		</a>
			</small></h6> 
		
			
		
		<hr>

		<strong>Date du début : {{$st->start_date->format('d-m-Y')}}</strong>
		@if($st->end_date)
			<strong>//	Date de fin : {{$st->end_date->format('d-m-Y')}} </strong>
		@endif
		<br>
	<p>
		{{$st->comment}}
	</p>
		
	@endforeach
</div>



<div class="col-md-4">
	<h4>Conditions particulières</h4>
	@foreach($student->particulars as $particular)


	<h6>{{$particular->particular}} 
		<small><a href="{{route('particular_edit',$st->id)}}">
		<button class="btn btn-success btn-sm">Modifier</button>
		</a>
	</small></h6>
	
		<hr>
		<strong>Date de création : {{$particular->created_at->format('d-m-Y')}}</strong>
	<p>
		{{$particular->comment}}
	</p>
	@endforeach
</div>
	
	
	


</div>

	

@endsection

