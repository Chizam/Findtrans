@extends('layouts.mylayout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>


           
                <div class=" table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Available Tickets</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Price</th>
                                                <th>Departure Time</th>
                                                <th>Departure Date</th>

                                            </tr>
                                        </thead>
                                         @foreach($trips as $trip)
            
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$trip->tickets}}</td>
                                                <td>
                                                    <span class="block-email">{{$trip->from}}</span>
                                                </td>
                                                <td class="desc">{{$trip->to}}</td>
                                                <td class="desc">{{$trip->price}}</td>
                                                <td class="desc" style="color: black;">{{$trip->departure_time}}</td>
                                                <td class="desc">{{$trip->departure_date}}</td>
                                                
                                               
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                    
                                        @endforeach
                                        
                                    </table>
                                </div>

                                

                                <div class="row justify-content-center">
            
                                    <div class="col-md-12">
                                        {{ $trips->appends(Request::except('page'))->links() }}
                                    </div>
                                </div>

                
<div class="row m-t-150 container justify-content-center">
                            <div class="col-md-10">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-10">
                               
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Bus</th>
                                                <th>Driver</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($buses as $bus)
                                            <tr>
                                                <td>{{$bus->bus}}</td>
                                                <td>{{$bus->driver}}</td>
                                                
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>     
            </div>

        </div>
    </div>
</div>
@endsection