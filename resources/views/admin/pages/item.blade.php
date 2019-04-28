@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	@if(isset($flight->image1))
      		<img class="d-block w-100" src="/storage/images/{{$flight->image1}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($flight->image2))
      		<img class="d-block w-100" src="/storage/images/{{$flight->image2}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($flight->image3))
      		<img class="d-block w-100" src="/storage/images/{{$flight->image3}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="../images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($flight->image4))
      		<img class="d-block w-100" src="/storage/images/{{$flight->image4}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="../images/default.jpg" alt="First slide">
      	@endif
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

 
</div>
<div class="container-fluid mb-5">
	<div class="card">
	  <div class="card-header">
	    Trip Informations
	  </div>
	  <div class="card-body">
	   	   <form method="post" action="/reserveflight/{{$flight->id}}" enctype="multipart/form-data">

			        	@csrf
			        	@method('PUT')
			        	<div class="row">
	    					<div class="col">
				        		<label>From :</label>
				        		<input type="text" name="from" class="form-control" value="{{$flight->from}}">
				        	</div>
				        	<div class="col">
				        		<label>To :</label>
				        		<input type="text" name="to" class="form-control" value="{{$flight->to}}">
				        	</div>
			        	</div>
			        	<div class="row">
			        		<div class="col">
			        			<label>Price :</label>
			        			<input type="number" name="price" placeholder="JD" class="form-control" value="{{$flight->price}}">
			        		</div>
			        	</div>
			        	<div class="row">
				        	<div class="col">
				        		<label>Check In :</label>
				        		<input type="Date" name="check_in" class="form-control" value="{{$flight->check_in}}">
				        	</div>
				        	<div class="col">
				        		<label>Check Out :</label>
				        		<input type="date" name="check_out"  class="form-control" value="{{$flight->check_out}}">
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col">
				        		<label>Class :</label>
				        		 <select class="form-control" name="class[]" multiple>
				        		 	<?php $array=explode(',',$flight->class);
				        		 		
				        		 		
				        		 	?>
				        		 	@if(in_array("1", $array))<option value="1" selected>Economy</option>@else
				        		 		<option value="1">Economy</option>@endif
				        		 	@if(in_array("2", $array))<option value="2" selected>First</option>@else
				        		 		<option value="2">First</option>@endif
				        		 			@if(in_array("3", $array))<option value="3" selected>Business</option>@else
				        		 		<option value="3">Business</option>@endif
								</select> 
				        	</div>
				        	
				        </div>
			        	<div class="row">
			        		<div class="col">
			        			<label>Adult Number :</label>
			        			<input type="number" name="adult" placeholder="1 or more" class="form-control" value="{{$flight->adult}}">
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col">
			        			<label>children Number :</label>
			        			<input type="number" name="children" placeholder="0 or more" class="form-control" value="{{$flight->children}}">
			        		</div>
			        	</div>
			        	<div class="row">
	    					<div class="col">
				        		<label>Airpot Name From :</label>
				        		<input type="text" name="airpot_from" class="form-control" value="{{$flight->airpot_from}}">
				        	</div>
				        	<div class="col">
				        		<label>Airpot Name To :</label>
				        		<input type="text" name="airpot_to" class="form-control" value="{{$flight->airpot_to}}">
				        	</div>
			        	</div>
			        	<div class="form-group">
						  	<label>Flight Company:</label>
						  	<select class="form-control" name="company_id">
						  		@if(isset($FlightCompany))
						  			@foreach($FlightCompany as $t)
						  				@if($flight->flightcompany->id==$t->id)
						  					<option value="{{$t->id}}" selected>{{$t->name}}</option>
						  				@else
						  				<option value="{{$t->id}}">{{$t->name}}</option>
						  				@endif
						  			@endforeach
						  		@endif
						  	</select>
						  </div>

						  <br>
						  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control ">
					      <span>Choose Image1</span>
					      <input type="file" name="image1"  multiple>
					    </div>
					    
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image2</span>
					      <input type="file" name="image2"  multiple>
					    </div>
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image3</span>
					      <input type="file" name="image3"  multiple>
					    </div>
					    
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image4</span>
					      <input type="file" name="image4" multiple>
					    </div>
					    
					  </div>
			        	<br>
			        	
						

					<div class="modal-footer">
			        <a href="/reserveflight" type="button" class="btn btn-secondary">Cancel</a>
			        <button type="submit" name="submit"  class="btn btn-primary">Add</button>
			      </div>
			        </form>
			        </div>
			 </div>
		</div>

 
@endsection