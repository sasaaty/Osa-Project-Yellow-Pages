  <?php 
  $searchPlaceHolder = "";
  $button1 = "accept";
  $button2 = "reject";
  if ($view == "Suggestion"){
    $searchPlaceHolder = "suggested suppliers";
  }elseif($view == "Accepted"){
    $searchPlaceHolder = "accepted suppliers";
    $button1 = null;
  }elseif($view == "Rejected"){
    $button2 = "delete";
    $searchPlaceHolder = "rejected suppliers";
  }
  ?>
  <span></span>
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
          @if (!empty($button1))
            <button class="flex-space">{{$button1}}</button>
          @endif
          <button class="flex-space">{{$button2}}</button>
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
              <td>{{$supplier->company_name}}</td>
              <td>{{$categories[$supplier->category_id - 1]->name}}</td>
              <td>{{$supplier->contact_no}}</td>
              <input type="hidden" value="{{$supplier->id}}">
            </tr>
            @endforeach
          @else
            <tr><td class="none" colspan="1000">None</td></tr>
          @endif
        </table>
        <input type="hidden" value="{{$view}}">
      </div>
    </div>        
  </div>

  <div class="center">
    <?php $paginator = $suppliers; ?>
    @include('pagination.limit_links')
  </div>