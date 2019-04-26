@extends('layouts.app2')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
    
                   <form>
                        <div class="form-group row">
                            <label for="Title" class="col-sm-3 col-form-label font-weight-bold">Title: </label>
                                <div class="col-sm-8">
                                <input type="text" name="#" class="form-control">
                                </div>    
                            </div>

                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold" for="CustomSelectDistance">Distance: </label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="CustomSelectDistance">
                                        <option value="">5K</option>
                                        <option value="">10K</option>
                                        <option value="">15K</option>
                                    </select>
                                </div>
                            </div>
                           
                        <div class="form-group row">
                            <label for="Players" class="col-sm-3 col-form-label font-weight-bold">Players: </label>
                                <div class="col-sm-8">
                                    <input type="text" name="#" class="form-control">
                                </div>
                        </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary">Create</button>
                            </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>        
@endsection