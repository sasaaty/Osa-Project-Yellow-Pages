  <?php 
  $searchPlaceHolder = "";
  if ($view == "Suggestion"){
    $searchPlaceHolder = "suggested suppliers";
  }elseif($view == "Accepted"){
    $searchPlaceHolder = "accepted suppliers";
  }elseif($view == "Rejected"){
    $searchPlaceHolder = "rejected suppliers";
  }
  ?>
  <div class="company row">
    <div class="twelve columns">
      <div class="row admin-head">
        <h4 class ="six columns">{{$view}}</h4> 
        <form class="six columns">
          <div class="flex msearch">
            <input type="text" name="search" placeholder="Search {{$searchPlaceHolder}}"> 
            <button type="submit" class="button-primary admin-btn"><img src="{{asset('img/ic_search_white_24px.svg')}}"></button>
          </div>
        </form>
      </div>
      <form class="flex">
        <select class="flex-space" name="category">
          <option value="All">All Categories</option>

          @foreach($categories as $category)
            @if ($category->id == $current)
              <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
          @endforeach
        </select>
        <button type="submit" class="admin-btn"><img src="{{asset('img/ic_filter_list_black_24px.svg')}}"></button>
      </form>
    </div>  
  </div>

  <div class="company row">
    <div class="twelve columns">
      <div class="scroll-overflow-x"> 
        <form class="flex">
          <div class="button flex-space">
            <input type="checkbox" name="">
            <img src="{{asset('img/ic_arrow_drop_down_black_18px.svg')}}">
          </div>
          <button class="flex-space">accept</button>
          <button class="flex-space">reject</button>
        </form>
      </div>
      <div class="scroll-overflow-x">
        <table class="admin-table twelve columns">
          <tr>
            <th></th>
            <th>Company Name</th>
            <th>Service Type</th>
            <th>Contact Number</th>
          </tr>

          @if(count($suppliers) > 0)
            @foreach($suppliers as $supplier)
            <tr>
              <td><input type="checkbox" name=""></td>
              <td onclick="editToggle(this)">{{$supplier->company_name}}</td>
              <td onclick="editToggle(this)">{{$categories[$supplier->category_id - 1]->name}}</td>
              <td onclick="editToggle(this)">{{$supplier->contact_no}}</td>
            </tr>
            @endforeach
          @else
            <tr><td class="none" colspan="1000">None</td></tr>
          @endif
        </table>
      </div>
    </div>        
  </div>

  <div class="center">
    <?php $paginator = $suppliers; ?>
    @include('pagination.limit_links')
  </div>

  <script>
    var xhttp;
    if (window.XMLHttpRequest) {
      // code for modern browsers
      xhttp = new XMLHttpRequest();
      } else {
      // code for IE6, IE5
      xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  </script>