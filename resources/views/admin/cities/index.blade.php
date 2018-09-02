@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">Add Cities</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <form action="{{ route('cities.store') }}" method="POST">
                        @csrf
                            <div>
                            <label>City Name</label>
                                <input type="text" name="city_name" class="form-control" placeholder="add city name">
                            </div>
                            <div> 
                            <label> States</label>
                                 <input type="text" name="state_name" class="form-control" placeholder="add state name">
                            </div>

                            <div class=" text-center">
                            <input type="submit" value="Add Details" class="btn btn-success btn-lg" name="">
                            </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
