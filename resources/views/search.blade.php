<?php if(empty($search)) $search = null; ?>

<div class="header">
    <div class="container">
        <form class="searchWhole">  
          <input class="searchTerm" type="text" name="search" placeholder="Search from all suppliers..." value="{{$search}}">
          <button class="searchButton" type="submit">
            <img src="{{asset('img/ic_search_white_36px.svg')}}">
          </button>
        </form>
    </div>
</div>