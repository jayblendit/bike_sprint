@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
    
                   <form action="{{route('bikegame.store')}}" method="post">
                    @csrf
                        <div class="form-group row">
                            <label for="Title" class="col-sm-3 col-form-label font-weight-bold">Title: </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>    
                            </div>

                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold" for="CustomSelectDistance">Distance: </label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="CustomSelectDistance" name="distance">
                                        <option value="5">5K</option>
                                        <option value="10">10K</option>
                                        <option value="15">15K</option>
                                    </select>
                                </div>
                            </div>
                           
                        <div class="form-group row">
                            <label for="Players" class="col-sm-3 col-form-label font-weight-bold">Players: </label>
                                <div class="col-sm-8">
                                    <input type="players" name="no_of_players" class="form-control" id="inputPlayers" placeholder="Players">
                                </div>
                            </div>
                            
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" href="#" role="button">Create</a>
                                <a class="btn btn-primary" href="lobby" role="button">Cancel</a>
                            </div>

                            <div class="mx-auto" style="width: 50px;">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>        
@endsection

