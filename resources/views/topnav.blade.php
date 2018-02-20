<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
	<div class="topnav">
		<h3 class="topHead">Hello! </h3>
		<img onclick="menuToggle(this)" class="menu u-pull-right" src="{{asset('img/ic_close_white_36px.svg')}}">
	</div>
	<div class="normal">
		<a href="{{ url('auth/google') }}" class="btn btn-lg btn-danger btn-block">
				<strong>Login With Google</strong>
		</a>
		<a href="/">Search</a>
		<a href="/Suggestion">Suggest</a>
	</div>
</nav>

<div class="topnav">
	<img class="menu u-pull-left" onclick="menuToggle(this)" src="{{asset('img/ic_menu_white_36px.svg')}}">
	<div class="osa"><a href="/" class="topHead">Blue Pages</a></div>
</div>
