@extends('admin.layouts.app')
@section('content')

<div id="content-wrapper">
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Mail</li>

        </ol>
        <div class="page">

<table class="layout display responsive-table">
    <thead>
        <tr>
            <th>Name</th>
            <th >Location</th>
            <th >Mail</th>
			<th colspan="2" charoff="5" >Message</th>
        </tr>
    </thead>
    <tbody>
@foreach($contact as $c)
        <tr>
            <td class="organisationnumber">{{$c->name}}</td>
            <td class="organisationnumber">{{$c->country}}</td>
            <td class="organisationnumber">{{$c->email}}</td>
            <td class="organisationname" ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span>Show</span></button></td>

            <td class="actions" >
            	<form method="post" action="/contact/{{$c->id}}">
            		@csrf
            		@method('DELETE')
                <button type="submit" title="Remove"><i class="fa fa-times"></i></button>
                </form>
                @if($c->ok==1)
                @else
                <form method="post" action="/contact/{{$c->id}}">
            		@csrf
            		@method('PUT')
                <button type="submit" title="Remove"><i class="fa fa-thumbs-up"></i></button>
                </form>
                @endif
            </td>
        </tr>
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
		       {{$c->comment}}
		      </div>
		      
		    </div>
		  </div>
		</div>
@endforeach
       

    </tbody>
</table>
</div>

@endsection