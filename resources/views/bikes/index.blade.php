@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bike Serial</h5>
                <qrcode-stream @decode="onDecode"></qrcode-stream>
                <br/>
                 <br/>
                <label for="basic-url">or Enter Bike Serial</label>
                <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Enter Bike Serial" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br/>
                <a href="#" class="btn btn-primary mx-auto">Proceed</a>
                <br/>
                <br/>
                <a href="#" class="btn btn-primary mx-auto">Skip</a>
            </div>
        </div>
    </div>
</div>
@endsection
