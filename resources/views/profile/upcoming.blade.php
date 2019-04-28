@extends('layouts.user_profile')
@section('body')
	<div class="col-md-9 order-content">
          
		<div class="form_main col-md-4 col-sm-5 col-xs-7">
                <h4 class="heading"><strong>Flight Reserve</strong>  UpComing  <span></span></h4>
           <div id="fh5co-tours" class="fh5co-section-gray">
           <div class="container-fluid" >
              
                @foreach($flight as $f)
                    <div class="fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="/storage/images/{{$f->reserveflight->image1}}" alt="" style="height:200px;" class="img-responsive">
                      		
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:right;margin-top:10px;">
                                	<?php 
                                		$mytime = Carbon\Carbon::now();
									 $mytime->toDateTimeString();
                                		$begin = Carbon\Carbon::parse($f->reserveflight->check_out);
                                	?>
                                	@if($begin->diffInDays($mytime)==0)
                                	 Soon
                                	@else
                                	{{$begin->diffInDays($mytime)}} Days
                                	@endif
                                	
                      		</span>
                                <h3>{{$f->reserveflight->from}} To {{$f->reserveflight->to}}</h3>
                  
                                <span class="price">{{$f->reserveflight->price}} JD</span>
                                <span class="">{{$f->reserveflight->check_in}} to {{$f->reserveflight->check_out}}</span>
                                <a class="btn btn-primary btn-outline" href="/flight/{{$f->id}}">show Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>

                    </div>
			@endforeach
			
		</div></div>
            </div>
            
	</div>
@endsection