@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bike Serial</h5>

                <qr-scanner-component></qr-scanner-component>
            </div>
        </div>
    </div>
</div>
@endsection
