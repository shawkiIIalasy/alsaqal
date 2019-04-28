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
     	@if(isset($hotel->image1))
      		<img src="/storage/images/{{$hotel->image1}}" alt="hotel">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>

    <div class="item">
      @if(isset($hotel->image2))
      		<img src="/storage/images/{{$hotel->image2}}" alt="hotel">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>

    <div class="item">
      @if(isset($hotel->image3))
      		<img src="/storage/images/{{$hotel->image3}}" alt="hotel">
      	@else
      		<img src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="item">
     @if(isset($hotel->image4))
      		<img src="/storage/images/{{$hotel->image4}}" alt="hotel">
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
						  	<label> Company : {{$hotel->hotelcompany->name}}</label>
						  	
						  </div>
						  <div class="col-md-4">
						  	<label> Location : {{$hotel->hotelcompany->city}},{{$hotel->hotelcompany->country}}</label>
						  	
						  </div>
			        	</div>
			        	<div class="row">
			        		<div class="col-md-3">
			        			<label>Price : {{$hotel->price}} JD</label>
			        			
			        		</div>
			        		<div class="col-md-3">
			        			<label>Rooms : {{$hotel->rooms}}</label>
			        		</div>
			        		<div class="col-md-3">
			        			<label>Adult : {{$hotel->adult}}</label>
			        		</div>
			        		<div class="col-md-3">
			        			<label>Children : {{$hotel->children}}</label>
			        		</div>
			        	</div>
			        	<div class="row">
				        	<div class="col-md-4">
				        		<label>Check In : {{$hotel->check_in}}</label>
				        		
				        	</div>
				        	<div class="col-md-4">
				        		<label>Check Out : {{$hotel->check_out}}</label>
				        		
				        	</div>
				        </div>
				        
			        	<form method="post" action="/hotel">
			        		@csrf
			        		@method('POST')
			        		<input type="hidden" name="id" value="{{$hotel->id}}">
			        	
			        	<br>
			        	
						

					<div class="modal-footer">
			        <a href="/hotel" type="button" class="btn btn-secondary">Cancel</a>
			        <button type="submit" name="submit"  class="btn btn-primary">Reserve</button>
			      </div>
			        </form>
			        </div>
			</div>
		

 </div>
@endsection