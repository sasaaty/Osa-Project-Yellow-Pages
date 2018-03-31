<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Blue Pages - {{$supplier->company_name}}</title>
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
          <span class="subText"> 
            <a href="{{route('search', ['sort' => $supplier->category_id])}}"> {{ $category }} </a> 
          </span>
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
        <div class="company five columns">
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
          <p> <a href="{{url($supplier->website)}}">{{ $supplier->website }}</a></p>
          @endif
        </div>

        <div class="seven columns">
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

          @if(!empty($reviews))
            @for($i = 0; $i < sizeOf($reviews); $i++) 
              <div class="company row">
                <div class="twelve columns">
                  <img class="comment-picture" src="images/favicon.png">

                  <div class="comment">
                    <strong class="comment-name">{{$users[$i]}}</strong>
                    <div class="comment-rating">
                      @for($j = 0; $j < 5; $j++)
                        @if($j < $reviews[$i]->rating)
                          <span class="rate">★ </span>
                        @else
                          <span>★ </span>
                        @endif
                      @endfor
                    </div>
                    <p>{{$reviews[$i]->review_content}}</p>
                    <div class="subText">{{$reviews[$i]->created_at}}</div>
                  </div>
                </div>
              </div>
            @endfor

            @if($reviews->hasMorePages())
              <a href="">load more</a>
            @endif
          @endif
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
