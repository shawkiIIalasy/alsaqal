@extends('admin.layouts.app')
@section('content')

<div id="content-wrapper">
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Users</li>

        </ol>
        <div class="page">

<table class="layout display responsive-table">
    <thead>
        <tr>
            <th>Name</th>
            <th >email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
@foreach($user as $c)
        <tr>
            <td class="organisationnumber">{{$c->name}}</td>
            <td class="organisationnumber">{{$c->email}}</td>
            <td class="actions" >
            	<form method="post" action="/contact/{{$c->id}}">
            		@csrf
            		@method('DELETE')
                <button type="submit" title="Remove"><i class="fa fa-times"></i></button>
                </form>
               
            </td>
        </tr>
       
@endforeach
       

    </tbody>
</table>
</div>

@endsection