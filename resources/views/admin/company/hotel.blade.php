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
            <a href="#">Company</a>
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
		        <form method="post" action="/hotelcompany" enctype="multipart/form-data">
		        	@csrf
		        	@method('POST')
		        	<div class="form-group">
		        		<label>Company Name:</label>
		        		<input type="text" name="name" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Stars:</label>
		        		<input type="number" name="stars" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Country:</label>
		        		<input type="text" name="country" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>City:</label>
		        		<input type="text" name="city" class="form-control">
		        	</div>

		        	<div class="file-field form-group">
					    <div class="btn btn-primary btn-sm float-left form-control">
					      <span>Choose Logo</span>
					      <input type="file" name="image" multiple>
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

		@if(isset($hotel))
<div class="c">

			@foreach($hotel as $f)			
  <div class="column">
    <!-- Post-->
    <div class="post-module">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
			   
          <div class="day"><form  method="POST" action="/flightcompany/{{$f->id}}">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}

			    <div class="form-group">
			      <button type="submit" class="fa fa-window-close" style="background: none;border:none;color:#fff;"></button>
			    </div>
			  </form>
        	</div>
          
        </div><img src="/storage/images/{{$f->image}}" style="width:300px;height:240px; " />
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category">{{$f->stars}}</div>
        <h1 class="title">{{$f->name}}</h1>
        <h2 class="sub_title">{{$f->city}},{{$f->country}}</h2>
       
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i>{{$f->created_at->diffForHumans()}}</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> {{$f->admin->name}}</a></span></div>
      </div>
    </div>
  </div>
 
					
					@endforeach

		@else
			<div>
				no 
			</div>
		@endif
	</div>
@endsection