@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->
                   
                    
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<span class="hidden-xs">{{$user->name}}</span>
						<br>
						<span class="hidden-xs">{{$user->email}}</span>
					</div>
					<div class="profile-usertitle-job">
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							<span class="hidden-xs">Personal<span> </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							<span class="hidden-xs">Delivery Address<span> </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							<span class="hidden-xs">Orders <span></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<span class="hidden-xs">My Wishlist <span></a>
						</li>
                            <li>
							<a href="#">
							<i class="glyphicon glyphicon-shopping-cart"></i>
							<span class="hidden-xs">Shopping Bag<span> </a>
                            
						</li>
                        
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		@yield('body')
		
		
	</div>
</div>
@endsection