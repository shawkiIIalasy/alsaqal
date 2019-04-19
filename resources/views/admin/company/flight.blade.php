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
          <li class="breadcrumb-item active">Flight</li>
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
		        <form method="post" action="/admin/flightcompany" enctype="multipart/form-data">
		        	@csrf
		        	@method('POST')
		        	<div class="form-group">
		        		<label>Company Name:</label>
		        		<input type="text" name="name" class="form-control">
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
		@if(isset($flight))
		<section class="cards">
			@foreach($flight as $f)
					
					<article class="card card--1">
					<div class="card__info-hover">
					<a href="{{route('flightcompany.destroy',$f->id)}}"><span class="fa fa-window-close"></span></a>
					  <div class="card__clock-info">
					    <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
					    </svg><span class="card__time">{{$f->created_at}}</span>
					  </div>

					</div>
					<div class="card__img"></div>
					<a href="#" class="card_link">
					 <div class="card__img--hover" style="background-image:url('../storage/images/{{$f->image}}')">
					 	
					 </div>
					</a>
					<div class="card__info">
					<span class="card__category"></span>
					<h3 class="card__title">{{$f->name}}</h3>
					<span class="card__by">by <a href="#" class="card__author" title="author"></a></span>
					</div>
					</article>

					
					@endforeach
					</section>
		@else
			<div>
				no 
			</div>
		@endif
@endsection