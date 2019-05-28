@extends('layouts.app')

@section('content')                           
<div class="container">  
	  <div class="row">
	   		<div class="col-sm-3 col-4">
			   	<h1>Lobby</h1>
				</div> 
		</div>
</div>

<div class="container">  
		<div class="form-group row"> 
			  <div class="col-md-7 offset-md-5">

			      	<a href="{{ route('ranking')}}/5k" class="btn btn-outline-primary">

			      	    {{ __('Ranking') }}
			      	</a>
						
						@if (Auth::check() && Session::has('serial_number'))
							<a href="{{ route('bikegames.create')}}" class="btn btn-outline-primary">
			                   {{ __('Create') }}
			        		</a>
			        	@endif

			  </div>
		</div>
</div>


<br>

<div class="container"> 

  <table class="table table-hover table-bordered ">

 <thead>
      <tr>
        <th style="width:15%" class="text-center">No. of Players</th>
        <th style="width:40%" class="text-center">Title</th>
        <th style="width:30%" class="text-center">Status</th>
        <th style="width:30%" class="text-center">Action</th>
      </tr>
 </thead> 
    @foreach($bikeGames as $bg)
<tbody>		
      	<tr>
        	<td style="width:15%" class="text-center">{{ $bg->no_of_players }}</td>
          	<td style="width:15%" class="text-center">{{ $bg->title }}</td>
          	<td style="width:15%" class="text-center">{{ $bg->status }}</td>
          	<td style="width:30%" class="text-center">
			@if (Auth::check() && Session::has('serial_number'))
          		<a href="{{ route('bikegames.match')}}">
          		<button type="submit" id="join" style="width:50%">Join</button>
          		</a>
          	@endif
          	</td> 
		</tr>
</tbody> 
		@endforeach
  </table>
</div>
 @endsection
	<!-- <div class="container">  
	  	<div class="row">
	   		<div class="col-sm-3 col-4">
			   <p>No. of Players</p>
			   		<div class="row">
					   <div class="col-sm-3 col-4">
					   		<p>#1</p>
						</div>
					</div>	
					<div class="row">
					   <div class="col-sm-3 col-4">
					   		<p>#2</p>
						</div>
					</div>	
			</div>
			<div class="col-sm-6 col-4">
			   <p>Title</p>
			   
			  		<div class="row">
			  				<div class="col-sm-6 col-4">
						   <p>Join1!</p>
						</div>
					</div>
					<div class="row">
					   <div class="col-sm-6 col-4">
					   		<p>Join2!</p>
						</div>
					</div>	
			</div>
			<div class="col-sm-3 col-2">
			   <p>Status</p>
			   
			  		<div class="row">
			  				<div class="col-sm-3 col-2">
						   <p>*Status1*</p>
						</div>
					</div>	
					<div class="row">
					   <div class="col-sm-3 col-2">
					   		<p>*Status2*</p>
						</div>
					</div>	
			</div>
		</div>
	</div>-->
