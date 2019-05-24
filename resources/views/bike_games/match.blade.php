@extends('layouts.app2')

@section('content')
<div class="container">  
	<div class="row">
	   	<div class="col-sm-5 col-4">
			<h2>BikeGame Match Page</h2>
      </div> 
	</div>
</div>
<div class="container">
  <div class="form-group row"> 
    <div class="col-md-7 offset-md-12">
      <a class="btn btn-primary" href="{{ route('bikegames.leave', ['id'=>$match->id]) }}" role="button">Leave Room</a>
    </div>
  </div>
</div>

<div class="container"> 	
	<table class="table">
  		<thead class="thead-light">
    		<tr>
      			<th scope="col" class="text-center">Game Title</th>
      			<th scope="col" class="text-center">Target:   Distance</th>
    		</tr>
  		</thead>
  	</table>
  	

  	<div class="card-deck">
  		<div class="card">
    		<div class="card-body">
      			<h5 class="position text-center">Position: 1st</h5>
      			<h5 class="rpm text-center"> (RPM)</h5>
      			<h5 class="distance text-center"> (Distance) </h5>
     		</div>
    		<div class="card-footer">
      			<small class="font-weight-bold">Player 1: (Name)</small>
    		</div>
  		</div>
  	
  	<div class="card">
    	<div class="card-body">
      		<h5 class="position text-center">Position: 2nd</h5>
      		<h5 class="rpm text-center"> (RPM)</h5>
      		<h5 class="distance text-center"> (Distance) </h5>
      	</div>
    	<div class="card-footer">
      		<small class="font-weight-bold">Player 2: (Name)</small>
    	</div>
    </div>
</div>

<!--<div class="container">
  <div class="form-group row"> 
    <div class="col-md-10 offset-md-8">
      <a class="btn btn-primary" type="text-right" href="#" role="button">Leave Room</a>
    </div>
  </div>
</div>-->





@endsection

