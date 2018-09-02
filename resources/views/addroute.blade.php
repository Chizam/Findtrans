@extends('layouts.mylayout')

@section('content')
@endsection
<br> <br> <br> <br><br>
<div>

	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success"><h2 class="text-center"> Available Destinations </h2></div>

                <div class="card-body">
                   

                   <form action="{{ URL('add-route') }}" method="post">
			@csrf
			<div class="form-group">
			<label> Days</label>
				<select class="form-control" name="days">
					<option value="0">-- Select -- </option>
					<option value="mon">Monday</option>
					<option value="tue">Tuesday</option>
					<option value="wed">Wednesday</option>
					<option value="thur">Thursday</option>
					<option value="fri">Friday</option>
					<option value="sat">Saturday</option>
					<option value="sun">Sunday</option>
					
				</select>
			</div>
			<div class="form-group">
			<label> Routes</label>
				<select class="form-control" name="route">
					<option value="0">-- Select --</option>
					<option value="1">Lagos - Oshogbo</option>
					<option value="2">Lagos - Nasarawa</option>
					<option value="3">Abuja - Lokoja</option>
					<option value="4">Kwara - Lagos</option>
					<option value="5">Delta - Abuja</option>
					<option value="6">PH - Abuja</option>
					
				</select>
			</div>

			<div class="form-group">
			<label> Departure Time</label>
				<select class="form-control" name="move_time">
					<option value="0">-- Select --</option>
					<option value="mor">7:00 Am</option>
					<option value="aft">12:30 Pm</option>
					<option value="evn">6:00 Pm</option>
					<option value="nit">9:00 Pm</option>
					
				</select>
			</div>
			<div class="text-center">
			
			<button class=" btn btn-success btn-lg" type="submit" name="add"> Add Route</button>
			</div>

		</form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


