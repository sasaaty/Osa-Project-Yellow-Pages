<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Admin-Blue Pages</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/skeleton.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

  <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/general.js')}}"></script>

  <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

  </head>
  <body>
  <!-- Top Nav
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @include('Admin.Nav')
  <!-- Main Thing
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="admin-block" id="adminBlock">
      <div class = "container">
        @if (!empty($view) && in_array($view, ['Suggestion', 'Accepted', 'Rejected'])) 
          @include('Admin.View')
        @else
          <div class="company admin-head">
            <?php $title = "New Supplier"; ?>
            @include('Form')
          </div>
        @endif
      </div>
    </div>

    @if (!empty($view) && in_array($view, ['Suggestion', 'Accepted', 'Rejected']))
      <div id="modalWhole" class="modal-box">
        <div id="modalContent" class="admin-block">
          <div class="container">
            <div class="company">
              @include('Admin.Form')
            </div>
          </div>
        </div>
      </div>
    @endif


<!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' );
    var mainContent = document.getElementById( 'adminBlock' );
    var modalContent = document.getElementById( 'modalContent' );

    function menuToggle(x) {
      classie.toggle( x, 'active' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
      classie.toggle( mainContent, 'admin-close' );;
      classie.toggle( modalContent, 'admin-close' );
    };

    var modalWhole = document.getElementById('modalWhole');

    function editToggle(x){
      classie.toggle(modalWhole, 'modal-open');
    }
  </script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
</body>
</html>
