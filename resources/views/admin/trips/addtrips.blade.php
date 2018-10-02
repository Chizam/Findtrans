@extends('layouts.mylayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success">Add Trips</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                    <div class="card-body">
                        <form action="{{ route('trips.store') }}" method="POST">
                        @csrf
                            
                           @if($errors->any())
                                <ul class="list-group">
                            @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">
                                        {{$error}}
                                    </li>
                            @endforeach
                                
                                </ul>
                            @endif

                            <div  class="form-group">
                            <label>Tickets</label>
                                <input type="text" name="tickets"  class="form-control">
                            </div>
                            <div  class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                    <label>From</label>
                                    <select  class="form-control" name="from">
                                    <option value="0">-- Select --</option>
                                     @foreach($cities as $city)
                                        
                                        <option value="{{$city->state}} {{$city->name}}"> {{$city->state}}  &nbsp; <=> &nbsp; {{$city->name}} </option>
                                    
                                     @endforeach
                                     </select>
                                    </div>

                                    <div class="col-md-6">
                                        
                                     <label>To</label>
                                    <select  class="form-control" name="to">
                                        <option value="0">-- Select --</option>
                                      @foreach($cities as $city)
                                        <option value="{{$city->state}} {{$city->name}}"> {{$city->state}} &nbsp; <=> &nbsp;{{$city->name}} </option>
                                   
                                     @endforeach
                                      </select>
                                    </div>
                                </div>
                            

                            </div>

                            <div  class="form-group">
                            <label>Price</label>
                                <input type="text" name="price"  value="#" class="form-control">
                            </div>
                            
                            
                            <div class="form-group">
                            <label> Departure Time</label>
                                <select class="form-control" name="time">
                                    <option value="0">-- Select --</option>
                                    <option value="7:00 Am">7:00 Am</option>
                                    <option value="12:30 Pm">12:30 Pm</option>
                                    <option value="6:00 Pm">6:00 Pm</option>
                                    <option value="9:00 Pm">9:00 Pm</option>
                                    
                                </select>
                            </div>

                            <div  class="form-group">
                            <label>Departure Date</label>
                                <input type="date" name="date"  class="form-control">
                            </div>

                            <div class=" text-center">
                            <input type="submit" value="Add Trip" class="btn btn-success btn-lg" name="">
                            </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

