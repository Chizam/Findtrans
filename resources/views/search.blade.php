@extends('layouts.nav')

@section('second')
@endsection

<head>

	<title></title>

	<style>
		
		.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}

.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}

.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

	</style>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>



	<div class="row m-t-150 container justify-content-center">
        <div class="col-md-10">
            <!-- DATA TABLE-->
                <div class="table-responsive m-b-10">
                               
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>Travelling From</th>
                                <th>Travelling To</th>
                                <th> Departure Time</th>
                                <th> Departure Date</th>
                                <th> Price</th>
                                <th> Available Tickets</th>
                                <th>Action</th>
                                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($trips as $trip)
                            <tr>
                                <td>{{$trip->from}}</td>
                                <td>{{$trip->to}}</td>
                                <td>{{$trip->departure_time}}</td>
                                <td>{{$trip->departure_date}}</td>
                                <td>{{$trip->price}}</td>
                                <td>{{$trip->tickets}}</td>

                                <td> <a href="#openModal" class="btn btn-info" > Book</a> </td>
                                                
                            </tr>
                        @endforeach
                                            
                        </tbody>
                </table>
                                
            </div>
            <!-- END DATA TABLE-->
        </div>
	</div>


 

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h3>Booking Details</h3>
		<div class="col-md-10">
			@if ($errors->any())
	            <div class="alert alert-danger">
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
	        @endif
			<form action="{{ route('booking.store') }}" method="POST">
				@csrf
				<div class="form-group">
				<label for=""> Name </label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
				<label for="email"> Email </label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
				<label for="phone">Phone</label>
					<input type="text" name="phone" class="form-control">
				</div>

				<div class="form-group">
				<label for="tickets"> No Of Ticket</label>
					<input type="text" name="tickets" class="form-control">
				</div>

				

				<div class="form-group text-center">
				
					<input type="submit" value="Book" class="btn btn-lg">
				</div>


			</form>
		</div>
	</div>
</div>


</body>