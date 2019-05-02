
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AlSaqal </title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">


    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('css/cs-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-border.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
       

<div id="google_translate_element"></div> 
  
<script type="text/javascript"> 
function googleTranslateElementInit() { 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
} 
</script> 
  
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
  
       @include('inc.header')

       @yield('content')


        
        @include('inc.footer')


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/sticky.js')}}"></script>

    <!-- Stellar -->
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <!-- Superfish -->
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <!-- CS Select -->
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/selectFx.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>

