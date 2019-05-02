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
                                    {{ __('PROCEED') }}
                                </a>
                                
                                <a href="/lobby" class="btn btn-primary mx-auto">Skip</a>
                        </div>s
            </div>
        </div>
    </div>
</div>
@endsection
