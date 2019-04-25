@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">

                                <a href="#" class="btn btn-primary">
                                    {{ __('Scan QR Code') }}
                                </a>
                   </div>
               </div>


                    <div class="form-group row">
                    <div class="col-md-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>or</br>
                    <strong> Enter Bike Serial:</strong>
                    <input type="text" name="serial_number" class="form-control">
                </div>
            </div>


                    <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                                <a href="#" class="btn btn-primary">
                                    {{ __('PROCEED') }}
                                </a>
                   </div>
               </div>
               

                             <a href="#" class="btn btn-primary">
                                 {{ __('Scan QR Code') }}
                             </a>  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <br>or</br>
                                    <strong> Enter Bike Serial:</strong>
                                        <input type="text" name="serial_number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <a href="#" class="btn btn-primary">
                                    {{ __('PROCEED') }}
                                </a>
                            </div>
                        </div>
                </div>        
>>>>>>> cec45e05e96b61d12a1e4cc91862f2d1577b1cf2
                <a href="https://laravel.com/docs">Skip</a>

            </div>
        </div>
    </div>
</div>
@endsection
