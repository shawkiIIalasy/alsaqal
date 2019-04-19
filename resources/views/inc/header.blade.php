 <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="/" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="/"><i class="icon-airplane"></i>AlSaqal</a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active"><a href="/">Home</a></li>
                            <li>
                                <a href="#" class="fh5co-sub-ddown">Rresveration</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="/flight">flights</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Bus</a></li>
                                    <li><a href="#">Cars</a></li>
                                </ul>
                            </li>
                            <li><a href="flight.html">about us</a></li>
                            
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            
                                @if (Auth::guest())
                                <li class="button-log">
                                <a class="btn-open" href="{{ route('login') }}">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span> Sign in</span>
                                </a></li>
                                <li class="button-log">
                                <a class="btn-open" href="{{ route('register') }}">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Register</span>
                                </a></li>
                                @else
                                 <li class="button-log dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                                       <!-- @if(isset(Auth::User()->image))
                                        <i> <img class="avatar" src="/storage/images/{{Auth::User()->image}}" alt="avatar" /></i>
                                        @else
                                        <i> <img class="avatar" style="width:35px;height:35px" src="/images/man.png" alt="avatar" /></i>
                                        @endif-->
                                         {{ Auth::user()->name }} 
                                       
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="/user-profile"><i class="fa fa-user"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-cog"></i>Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out-alt"></i>Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </li>

                          @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </header>