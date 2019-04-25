@extends('layouts.app2')

@section('content')

<div class="container">  
		<div class="form-group row"> 
			  <div class="col-md-7 offset-md-5">
              <a class="btn btn-primary" href="{{ route('ranking')}}">5k</a>
              <a class="btn btn-primary" href="{{ route('rankingg')}}">10k</a>
              <a class="btn btn-primary" href="{{ route('rankinggg')}}">15k</a>
			  </div>
		</div>
</div>	 

<div class="container">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
              <th class="text-center" scope="col">Place</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Time in 15k</th>
            </tr>
        </thead>
    <tbody>
        <tr>
          <th class="text-center" scope="row">1</th>
          <td class="text-center">dave</td>
          <td class="text-center">00:3:00</td>
        </tr>  
        <tr>
          <th class="text-center" scope="row">2</th>
          <td class="text-center">via</td>
          <td class="text-center">00:31:00</td>
        </tr>
</div>
@endsection      