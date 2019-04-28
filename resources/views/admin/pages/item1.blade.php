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
    	@if(isset($hotel->image1))
      		<img class="d-block w-100" src="/storage/images/{{$hotel->image1}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($hotel->image2))
      		<img class="d-block w-100" src="/storage/images/{{$hotel->image2}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="/images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($hotel->image3))
      		<img class="d-block w-100" src="/storage/images/{{$hotel->image3}}" alt="First slide">
      	@else
      		<img class="d-block w-100" src="../images/default.jpg" alt="First slide">
      	@endif
    </div>
    <div class="carousel-item">
      @if(isset($hotel->image4))
      		<img class="d-block w-100" src="/storage/images/{{$hotel->image4}}" alt="First slide">
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
	   	   <form method="post" action="/reservehotel/{{$hotel->id}}" enctype="multipart/form-data">

			        	@csrf
			        	@method('PUT')
			        	<div class="row">
			        		<div class="col">
			        			<label>Price :</label>
			        			<input type="number" name="price" placeholder="JD" class="form-control" value="{{$hotel->price}}">
			        		</div>
			        	</div>
			        	<div class="row">
				        	<div class="col">
				        		<label>Check In :</label>
				        		<input type="Date" name="check_in" class="form-control" value="{{$hotel->check_in}}">
				        	</div>
				        	<div class="col">
				        		<label>Check Out :</label>
				        		<input type="date" name="check_out"  class="form-control" value="{{$hotel->check_out}}">
				        	</div>
				        </div>
				       
			        	<div class="row">
			        		<div class="col">
			        			<label>Adult Number :</label>
			        			<input type="number" name="adult" placeholder="1 or more" class="form-control" value="{{$hotel->adult}}">
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col">
			        			<label>children Number :</label>
			        			<input type="number" name="children" placeholder="0 or more" class="form-control" value="{{$hotel->children}}">
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col">
			        			<label>Rooms Number :</label>
			        			<input type="number" name="children" placeholder="0 or more" class="form-control" value="{{$hotel->rooms}}">
			        		</div>
			        	</div>
			        	
			        	<div class="form-group">
						  	<label>Hotel Company:</label>
						  	<select class="form-control" name="company_id">
						  		@if(isset($HotelCompany))
						  			@foreach($HotelCompany as $t)
						  				@if($hotel->hotelcompany->id==$t->id)
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