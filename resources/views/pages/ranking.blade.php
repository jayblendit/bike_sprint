@extends('layouts.app2')
<<<<<<< HEAD
@section('content')
<div class="container"> 
	<br>
	<div class="form-group row"> 
		<a class="btn btn-primary" href="{{ route('lobby')}}">Back To Lobby</a>
		<div class="col-md-7 offset-md-5">
			<a class="btn btn-primary" href="{{ route('ranking')}}/5">5k</a>
			<a class="btn btn-primary" href="{{ route('ranking')}}/10">10k</a>
			<a class="btn btn-primary" href="{{ route('ranking')}}/15">15k</a>
		</div>
	</div>
=======

@section('content')

<div class="container"> 
	<a class="btn btn-primary" href="{{ route('lobby')}}">Back To Lobby</a>
	  <br>
	    <div class="form-group row"> 
		    <div class="col-md-7 offset-md-5">
			    <a class="btn btn-primary" href="{{ route('ranking')}}/5k">5k</a>
			    <a class="btn btn-primary" href="{{ route('ranking')}}/10k">10k</a>
			    <a class="btn btn-primary" href="{{ route('ranking')}}/15k">15k</a>
		    </div>
	    </div>
>>>>>>> be2e366d1bccd6d6c05bd52802a1ab65c05e2675
</div>	

<div class="container">

	  <table class="table table-hover table-bordered">
	  	<thead>
	  		<tr>
	  			<th class="text-center" scope="col">Place</th>
	  			<th class="text-center" scope="col">Name</th>
	  			<th class="text-center" scope="col">Time in {{$distance}}</th>
	  		</tr>
	  	</thead>
  <tbody>
  	  <tr>
  		<th class="text-center" scope="row">1</th>
  			<td class="text-center">Jay Paul</td>
  			<td class="text-center">00:25:29</td>
  	  </tr>
      <tr>
  	    <th class="text-center" scope="row">2</th>
  	    <td class="text-center">Rey</td>
  	    <td class="text-center">00:26:30</td>
      </tr>
      <tr>
  	    <th class="text-center" scope="row">3</th>
  	    <td class="text-center">Jason</td>
  	    <td class="text-center">00:27:00</td> 
      </tr>
    </tbody>
</div>
@endsection