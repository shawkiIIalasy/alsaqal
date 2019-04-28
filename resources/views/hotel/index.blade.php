@extends('layouts.app')
@section('content')

@if(count($ReserveHotel)>0)
         <div id="fh5co-tours" class="fh5co-section-gray">
           <div class="container">
               <div class="row"> 
      <?php $i=0;?>
      @foreach($ReserveHotel as $f)
  
                
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="/storage/images/{{$f->image1}}" alt="" class="img-responsive">
                            <div class="desc">
                                <span></span>
                                <h3>{{$f->hotelcompany->name}}</h3>
                                <span >{{$f->hotelcompany->city}},{{$f->hotelcompany->country}} </span>
                                <span class="price">{{$f->price}} JD</span>
                                <span class="">{{$f->check_in}} to {{$f->check_out}}</span>
                                <a class="btn btn-primary btn-outline" href="/hotel/{{$f->id}}">show Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                    
               
          
          <?php $i++; 
          if($i>=3)
            {
              echo "</div><div class='row'>";
              $i=0;
            }
            ?>
          @endforeach

                </div>
          </div>
        </div>

    @else
<div class="panel panel-collapse panel-danger" style="margin: 200px;">
  <div class="panel-heading">Note</div>
  <div class="panel-body text-center">No found any Reserve Hotel</div>
</div>
    @endif
@endsection