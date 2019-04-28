@extends('layouts.app')

@section('content')
@include('inc.slider')
<div id="fh5co-tours" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h3>Top</h3>
                    </div>
                </div>
                <div class="row">
                    @if(isset($flighttop))
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="/storage/images/{{$flighttop->image1}}" alt="" class="img-responsive">
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:left;margin-top:-100px; ">Flight</span>
                                <h3>{{$flighttop->from}} To {{$flighttop->to}}</h3>
                                <span class="price">{{$flighttop->price}}JD</span>
                                 <span >{{$flighttop->created_at->diffForHumans()}}</span>
                                <a class="btn btn-primary btn-outline" href="#">Reserve Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:left;margin-top:-100px; ">Flight</span>
                                <h3>New York</h3>
                                <span class="price">$1,000</span>
                                <a class="btn btn-primary btn-outline" href="#">Reserve Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                       @if(isset($hoteltop))
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="/storage/images/{{$hoteltop->image1}}" alt="" class="img-responsive">
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:left;margin-top:-100px; ">Hotels</span>
                                <h3>{{$hoteltop->hotelcompany->name}}</h3>
                                <span class="price">{{$hoteltop->price}}JD</span>
                                 <span >
                                    {{$hoteltop->hotelcompany->city}},{{$hoteltop->hotelcompany->country}}
                                   
                                    {{$hoteltop->created_at->diffForHumans()}}</span>
                                <a class="btn btn-primary btn-outline" href="#">Reserve Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="images/place-1.jpg" alt="" class="img-responsive">
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:left;margin-top:-100px; ">Flight</span>
                                <h3>New York</h3>
                                <span class="price">$1,000</span>
                                <a class="btn btn-primary btn-outline" href="#">Reserve Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="images/place-3.jpg" alt="" class="img-responsive">
                            <div class="desc">
                                <span style="background:#F78536;font-size: 22px;padding:10px;float:left;margin-top:-100px; ">Car</span>
                                <h3>Hongkong</h3>
                                <span>2 nights + Flight 4*Hotel</span>
                                <span class="price">$1,000</span>
                                <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center animate-box">
                        <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 animate-box">

                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-hotairballoon"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Family Travel</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 animate-box">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-search"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>alSaqal Plans</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-wallet"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Honeymoon</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">

                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-wine"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Business Travel</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 animate-box">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-genius"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Solo Travel</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-chat"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Explorer</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div id="fh5co-destination">
            <div class="tour-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="fh5co-destination-list" class="animate-box">
                            <li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Los Angeles</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Hongkong</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Italy</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Philippines</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Japan</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-half text-center">
                                <div class="title-bg">
                                    <div class="case-studies-summary">
                                        <h2>Most Popular Destinations</h2>
                                        <span><a href="#">View All Destinations</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Paris</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Singapore</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Madagascar</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Egypt</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
                                <a href="#">
                                    <div class="case-studies-summary">
                                        <h2>Indonesia</h2>
                                    </div>
                                </a>
                            </li>
                        </ul>       
                    </div>
                </div>
            </div>
        </div>

      
        <!-- fh5co-blog-section -->
        <div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                @if(!isset($contact))
                    <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>Not Found Any Message</p>
                        </blockquote>
                      
                    </div>
                    
                </div>
                @else
                    <?php $i=0;?>
                    @foreach($contact as $c)
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p style="white-space: pre-wrap;  ">{{$c->comment}}</p>
                        </blockquote>
                        <p class="author">{{$c->name}}<a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext">{{$c->country}}</span></p>
                    </div>
                    
                </div>
                <?php $i++;
                    if($i==3)break;?>
                    @endforeach
               @endif
            </div>
        </div>
    </div>
       

    

    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->
@endsection

