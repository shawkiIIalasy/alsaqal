@extends('admin.layouts.app')
@section('content')
<div id="content-wrapper">
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item active">Hotels</li>
          <button type="button"  class="fa fa-plus float-right" data-toggle="modal" data-target="#exampleModal"><span ></span></button>
        </ol>
<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		         <form method="post" action="/reservehotel" enctype="multipart/form-data">
		        	@csrf
		        	@method('POST')
		        
		        	<div class="row">
		        		<div class="col">
		        			<label>Price :</label>
		        			<input type="number" name="price" placeholder="JD" class="form-control">
		        		</div>
		        	</div>
		        	<div class="row">
			        	<div class="col">
			        		<label>Check In :</label>
			        		<input type="Date" name="check_in" class="form-control">
			        	</div>
			        	<div class="col">
			        		<label>Check Out :</label>
			        		<input type="date" name="check_out"  class="form-control">
			        	</div>
			        </div>
			     
		        	<div class="row">
		        		<div class="col">
		        			<label>Adult Number :</label>
		        			<input type="number" name="adult" placeholder="1 or more" class="form-control">
		        		</div>
		        	
		        		<div class="col">
		        			<label>children Number :</label>
		        			<input type="number" name="children" placeholder="0 or more" class="form-control">
		        		</div>
		        
		        		<div class="col">
		        			<label>Rooms Number :</label>
		        			<input type="number" name="rooms" placeholder="0 or more" class="form-control">
		        		</div>
		        	</div>
		        	<div class="form-group">
					  	<label>Hotel Company:</label>
					  	<select class="form-control" name="company_id">
					  		@if(isset($HotelCompany))
					  			@foreach($HotelCompany as $t)
					  				<option value="{{$t->id}}">{{$t->name}}</option>
					  			@endforeach
					  		@endif
					  	</select>
					  </div>
		        	<br>
		        	<div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control ">
					      <span>Choose Image1</span>
					      <input type="file" name="image1" multiple>
					    </div>
					    
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image2</span>
					      <input type="file" name="image2" multiple>
					    </div>
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image3</span>
					      <input type="file" name="image3" multiple>
					    </div>
					    
					  </div>
					  <div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Image4</span>
					      <input type="file" name="image4" multiple>
					    </div>
					    
					  </div>
					</div>

					  <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		        <button type="submit" name="submit"  class="btn btn-primary">Add</button>
		      </div>
		        </form>
		        	
		        
		      </div>
		      
		    </div>
		  </div>
		</div>
		@if(isset($ReserveHotel))
		<section class="cards-l">
			@foreach($ReserveHotel as $f)
					
					<article class="card-l card--1">
						
					<div class="card__info-hover">
						
						
					  <div class="card__clock-info">
					  	<span class="fa fa-clock" style="color:#AD7D52;"></span>
					    <span class="card__time">{{$f->created_at->diffForHumans()}}</span>
					  </div>

					</div>
					<div class="card__img"></div>
					<a href="#" class="card_link">
					 <div class="card__img--hover" style="background-image:url('../storage/images/{{$f->image1}}')">
					 	
					 </div>
					</a>
					<div class="card__info">
					<span class="card__category"></span>
					<h3 class="card__title">{{$f->hotelcompany->name}}</h3>
					<h5 class="card__title">{{$f->hotelcompany->stars}}stars</h5>
					<span class="card__by">by Admin <a href="/flightcompany" class="card__author" title="author">{{$f->admin->name}}</a></span>
					

					<div><a href="/reservehotel/{{$f->id}}" class="btn btn-primary" title="author">show</a>
					
					<div><form  method="POST" action="/reservehotel/{{$f->id}}">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}

			      <button type="submit" class="btn btn-danger" style="">Delete</button>
			  
			  </form></div>
					</div>
				</div>
					
					</article>

					
					@endforeach
					</section>
		@else
			<div class="card">
  <div class="card-body text-center badge-danger">No found any Reserve Flight</div>
</div>
		@endif
@endsection