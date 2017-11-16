<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
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
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
  <!-- Nav Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  @include('topnav')
  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  @include('search')

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="page container">
    <div class="company row">
      <div class="name ten columns">
        <h2> {{ $supplier->company_name }} </h2>
        <a class="subText" href="Home.html"> {{ $supplier->service_type }} </a>
      </div>

      <div class="rDisplay rBox two columns">
        <h3 class="rDisplay">
          {{ $supplier->rating }}
          <span>/5</span>
        </h3>
        <p class="subText rDisplay">220 votes</p>
      </div>
    </div>

    <div class="row">
      <div class="company about four columns">
        @if ( !empty($supplier->business_name) ) 
          <label>Business Name</label>
          <p> {{ $supplier->business_name }} </p>
        @endif

        @if ( !empty($supplier->address) ) 
          <label>Address</label>
          <p> {{ $supplier->address }} </p>
        @endif

        @if ( !empty($supplier->contact_no) ) 
          <label>Contact Number</label>
          <p> {{ $supplier->contact_no }} </p>
        @endif

        @if ( !empty($supplier->email) ) 
          <label>E-mail</label>
          <p> {{ $supplier->email }} </p>
        @endif

        @if ( !empty($supplier->fbpage) ) 
          <label>Facebook Page</label>
          <p> {{ $supplier->fbpage }} </p>
        @endif

        @if ( !empty($supplier->website) ) 
          <label>Website</label>
          <p> {{ $supplier->website }} </p>
        @endif
      </div>

      <div class="eight columns">
        <div class="company row">
          <form>
            <label class="comment-name">Comment</label>

            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
            </fieldset>

            <textarea placeholder="Share something about this supplier..." class="twelve columns"></textarea>
            <button class="u-pull-right button-primary" type="submit">send</button>
          </form>
        </div>

        <div class="company row">
            <div class="twelve columns">
              <img class="comment-picture" src="images/favicon.png">
              
              <div class="comment">
                <strong class="comment-name">Commenter's Name</strong>
                <div class="comment-rating">
                  <span class="rate">★ </span>
                  <span class="rate">★ </span>
                  <span class="rate">★ </span>
                  <span>★ </span>
                  <span>★ </span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum orci vitae erat finibus, interdum convallis sapien blandit. Sed erat lectus, posuere sit amet convallis semper, pretium id tortor. Curabitur aliquet sollicitudin tellus. Aenean sit amet vestibulum nisl. Quisque gravida mollis arcu, ut vehicula tortor hendrerit quis. Sed sed ligula posuere, auctor libero ac, faucibus magna. Curabitur consectetur nec lorem et consectetur. Nunc est lorem, iaculis eu nisl ut, varius imperdiet ipsum. Integer semper suscipit turpis. Nulla facilisi. Nulla in commodo ipsum, sit amet tincidunt orci. Nunc vel tempor quam, non porttitor diam. </p>
                <div class="subText">date of comment</div>
              </div>
            </div>
        </div>
      </div>
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
