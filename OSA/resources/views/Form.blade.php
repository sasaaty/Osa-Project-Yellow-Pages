<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Suggestion Form</title>
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
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/parallax.css">

    <link rel="stylesheet" type="text/css" href="css/component.css" />

  <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="js/classie.js"></script>
    <script src="js/general.js"></script>

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
    <div class="header">
      
    </div>

  <!-- Form
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <form>
      <div class = "company page container" style="padding:20px">
        <h1>Supplier Suggestion</h1>
        <div class="row">
          <div class="six columns">
            <label for="CompanyName">Company Name</label>
            <input class="u-full-width" type="text"  id="CompanyName" required>
          </div>

          <div class="six columns">
            <label for="BusinessName">Business Name</label>
            <input class="u-full-width" type="text"  id="BusinessName">
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label for="Address">Address</label>
            <input class="u-full-width" type="text"  id="Address">
          </div>
        </div>

        <div class="row">
          <div class="six columns">
            <label for="CompanyEmail">Email</label>
            <input class="u-full-width" placeholder="sdf@gmail.com" type="email" id="website" required>
          </div>
          <div class="six columns">
            <label for="Celno">Contact Number</label>
            <input class="u-full-width" type="tel"  id="Celno" required>
          </div>
        </div>

        <div class="row">
          <div class="six columns">
            <label for="BusinessType">Type of Business</label>
            <select class="u-full-width" id="BusinessType">
              <option value="Venue">Venue</option>
              <option value="LogisticalEquipment">Logistical Equipment</option>
              <option value="PrintingShirts">Printing & Shirts</option>
              <option value="Tents">Tents</option>
              <option value="CateringServices">Catering Services</option>
              <option value="Transportation">Transportation</option>
              <option value="AVEquiptment">AV Equiptment</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="six columns">
            <label for="Contact Person">Contact Person</label>
            <input class="u-full-width" type="text"  id="Contact Person">
          </div>
        </div>

        <div class="row">
          <div class="six columns">
            <label for="Website">Website</label>
            <input class="u-full-width" type="text" id="website">
          </div>

          <div class="six columns">
            <label for="Facebook">Facebook Page</label>
            <input class="u-full-width" type = "text" id="Facebook">
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label for="Notes">Notes for Administrator</label>
            <textarea class="u-full-width" id="Notes"></textarea>
          </div>
        </div>
        <button class="button" type="clear">clear</button>
        <input class="button-primary u-pull-right" type="submit" value="Submit">
      </div>
    </form>

    <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' )

    function menuToggle(x) {
      classie.toggle( x, 'active' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
    };
  </script>

    <!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

      <!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
