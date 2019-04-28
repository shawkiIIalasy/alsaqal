@extends('layouts.app')
@section('content')
@if (\Session::has('danger'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('danger') !!}</li>
        </ul>
    </div>
@endif
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     	@if(isset($flight->image1))
      		<img src="/storage/images/{{$flight->image1}}" alt="flight">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>

    <div class="item">
      @if(isset($flight->image2))
      		<img src="/storage/images/{{$flight->image2}}" alt="flight">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>

    <div class="item">
      @if(isset($flight->image3))
      		<img src="/storage/images/{{$flight->image3}}" alt="flight">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="item">
     @if(isset($flight->image4))
      		<img src="/storage/images/{{$flight->image4}}" alt="flight">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
<div class="panel panel-default">
	<div class="panel-heading">Trips Informations</div>
	 <div class="panel-body">
			        	<div class="row">
	    					<div class="col-md-4">
				        		<label>From : {{$flight->from}}</label>
				        	</div>
				        	<div class="col-md-4">
				        		<label>To : {{$flight->to}}</label>
				        	</div>
			        	
			        		<div class="col-md-4">
			        			<label>Price : {{$flight->price}} JD</label>
			        			
			        		</div>
			        	</div>
			        	<div class="row">
				        	<div class="col-md-4">
				        		<label>Check In : {{$flight->check_in}}</label>
				        		
				        	</div>
				        	<div class="col-md-4">
				        		<label>Check Out : {{$flight->check_out}}</label>
				        		
				        	</div>
				        </div>
				        <div class="row">
	    					<div class="col-md-4">
				        		<label>Airpot Name From : {{$flight->airpot_from}}</label>
				        	</div>
				        	<div class="col-md-4">
				        		<label>Airpot Name To : {{$flight->airpot_to}}</label>
				        	</div>
				        	<div class="col-md-4">
						  	<label> Company : {{$flight->flightcompany->name}}</label>
						  	
						  </div>
			        	</div>
			        	<form method="post" action="/flight">
			        		@csrf
			        		@method('POST')
			        	<input type="hidden" name="id" value="{{$flight->id}}">
				        <div class="row">
				        	<div class="col-md-12">
				        		<label>Class :</label>
				        		 <select class="form-control" name="class" >
				        	
				        		 		<option value="1">Economy</option>
				        		 
				        		 		<option value="2">First</option>
				 
				        		 		<option value="3">Business</option>
								</select> 
				        	</div>
				        	
				        </div>
			        	<div class="row">
			        		<div class="col-md-12">
			        			<label>Adult Number :</label>
			        			<input type="number" name="adult" placeholder="1 or more" class="form-control" value="{{$flight->adult}}" >
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col-md-12">
			        			<label>children Number :</label>
			        			<input type="number" name="children" min="0" max="{{$flight->children}}" placeholder="0 or more" class="form-control" value="{{$flight->children}}">
			        		</div>
			        	</div>
			        	
			        	
			        	<br>
			        	
						

					<div class="modal-footer">
			        <a href="/flight" type="button" class="btn btn-secondary">Cancel</a>
			        <button type="submit" name="submit"  class="btn btn-primary">Reserve</button>
			      </div>
			        </form>
			        </div>
			</div>
		

 </div>
@endsection