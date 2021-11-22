
<!DOCTYPE html>
<html lang="en">
<head>
<title>Realestate Bootstrap Theme </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="{{asset('inmolibs/assets/bootstrap/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('inmolibs/assets/style.css')}}"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{asset('inmolibs/assets/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{asset('inmolibs/assets/script.js')}}"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="{{asset('inmolibs/assets/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('inmolibs/assets/owl-carousel/owl.theme.css')}}">
<script src="{{asset('inmolibs/assets/owl-carousel/owl.carousel.js')}}"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('inmolibs/assets/slitslider/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('inmolibs/assets/slitslider/css/custom.css')}}" />
    <script type="text/javascript" src="{{asset('inmolibs/assets/slitslider/js/modernizr.custom.79639.js')}}"></script>
    <script type="text/javascript" src="{{asset('inmolibs/assets/slitslider/js/jquery.ba-cond.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('inmolibs/assets/slitslider/js/jquery.slitslider.js')}} "></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            @if(auth()->check())
            <div class="navbar-collapse  collapse">
              <!--bienvenida y desloguearse -->
                  <ul class ="nav navbar-nav navbar-left">
                    <li><h50 style="color:#dcdde1; font-size: 18px;">Bienvenido </h50><b style="color:#dcdde1;">{{auth()->user()->name}}</b></li>  
                  </ul>
              <!--bienvenida y desloguearse FIN -->
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{route('login.index')}}">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="agents.php">Agents</a></li>         
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class = "active" href ="{{route('login.destroy')}}">Log out</a> </li>
              </ul>
            </div>
            @else
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{route('login.index')}}">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="agents.php">Agents</a></li>         
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            @endif
            <!-- #Nav Ends -->
           
        
          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="{{route('login.index')}}"><img src="{{ asset('inmolibs/images/unnamed.png')}}" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="buysalerent.php">Buy</a></li>
                <li><a href="buysalerent.php">Sale</a></li>         
                <li><a href="buysalerent.php">Rent</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>


