
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>OSA Blue Pages</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('css/skeleton.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="{{asset('js/classie.js')}}"></script>
  <script src="{{asset('js/general.js')}}"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">

</head>
<body>
  <!-- Nav Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  @include('topnav')

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  @include('search')
<!-- Filter Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="filter">
    <div class=" row filterContent">
      <div class="services">
      	<div class="filterButton">
        	<a href="#">All Services</a>
        	<img src="{{asset('img/ic_arrow_drop_down_black_18px.svg')}}">
      	</div>

        <div class="services-content row">
        	<div class="three columns">
	          <a href="#">Venue</a>
	          <a href="#">Logistical Equipment</a>
        	</div>

        	<div class="three columns">
	          <a href="#">Printing & Shirts</a>
	          <a href="#">Tents</a>
        	</div>

        	<div class="three columns">
	          <a href="#">Catering Services</a>
	          <a href="#">Transportation</a>
        	</div>

        	<div class="three columns">	
	          <a href="#">AV Equipment</a>
	          <a href="#">Other</a>
        	</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="itemBox">
    <div class="item">
      <h5 class="itemName"><a href="/Company">Company Name</a></h5>
      <p class="itemService"><a href="/">Service</a></p>
      <p class="itemContent"><a href="#">Email</a></p>
      <p class="itemContent">09XX-XXX-XXXX</a></p>

      <p class="itemContent itemRate"><strong>★ 4.5</strong></p>
    </div>

    <div class="item">
      <h5 class="itemName"><a href="Company.html">Company Name</a></h5>
      <p class="itemService"><a href="#">Service</a></p>
      <p class="itemContent"><a href="#">Email</a></p>
      <p class="itemContent">09XX-XXX-XXXX</a></p>
    </div>

    <div class="item">
      <h5 class="itemName"><a href="Company.html">Company Name</a></h5>
      <p class="itemService"><a href="#">Service</a></p>
      <p class="itemContent"><a href="#">Email</a></p>
      <p class="itemContent">09XX-XXX-XXXX</a></p>
    </div>
    
    <div class="item">
      <h5 class="itemName"><a href="Company.html">Company Name</a></h5>
      <p class="itemService"><a href="#">Service</a></p>
      <p class="itemContent"><a href="#">Email</a></p>
      <p class="itemContent">09XX-XXX-XXXX</a></p>
    </div>
  </div>

<!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' )

    function menuToggle(x) {
      classie.toggle( x, 'active' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
    };
  </script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
