@extends('layouts.mylayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success">Add Buses</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                    <div class="card-body">
                        <form action="{{ route('buses.store') }}" method="POST">
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
                            <label>Bus Type</label>
                                <input type="text" name="bus"  class="form-control">
                            </div>
                            

                            <div class="form-group">
                            <label>Driver's Name</label>
                                <input type="text" name="driver" class="form-control">
                            </div>
                            
                            <div class=" text-center">
                            <input type="submit" value="Done" class="btn btn-success btn-lg" name="">
                            </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

