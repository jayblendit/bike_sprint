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
                          <th class="text-center" scope="col">Time in 5k</th>
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
            </div>
@endsection
<!-- <div class="row"> 

        <div class="col-sm-4 col-4">
            <p>Place</p>

            <div class="row">
                <div class="col-sm-4 col-4">
                <p>1</p>
                </div>
            </div>  
        </div>

          
        <div class="col-sm-4 col-4">
            <p>Name</p>
               
            <div class="row">
                <div class="col-sm-4 col-4">
                <p>dave</p>
                 </div>
            </div>
        </div>

          
        <div class="col-sm-4 col-4">
            <p>Time in 5k</p>
               
            <div class="row">       
                <div class="col-sm-4 col-4">
                <p>00:30:00</p>
                </div>
            </div>
        </div>  
    </div>-->
