<header id="header" class="header">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
    	</button>
		<a class="navbar-brand logo-page" href="#"><img src="http://i.imgur.com/qwR1IG9.png" alt="MIX-Shop" class="img-responsive"></a>
	</div>
	<div>
	<nav class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li>
				<a href="javascript:void(0)" title="" class="register-user" data-toggle="modal" data-target="#register-box"><img src="http://i.imgur.com/JDTpXUG.png" alt="MIX-register">
				</a>
				<div class="modal fade" id="register-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                @include('layouts.register-form')
	            </div>
			</li>
            <li>
            	<a href="" title="" class="user-login"><img src="http://i.imgur.com/XiBWZuO.png" alt="MIX-login"></a>
            </li>
		</ul>
	    <ul class="nav navbar-nav navbar-right right-top-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Trang chủ
                	<span class="nav-border-icon"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
				</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Shop
                	<span class="nav-border-icon"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
				</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Bộ sưu tập
                	<span class="nav-border-icon"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
				</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Địa điểm
                	<span class="nav-dropdown-icon"><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
				</a>
				<ul class="dropdown-menu">
                	<li><a href="" title="">Hà Nội</a></li>
                	<li><a href="" title="">TP. HCM</a></li>
                	<li><a href="" title="">Đà Nẵng</a></li>
               	</ul>
			</li>
	    </ul>
	</nav>
	<div class="search-form-container">
		@include('layouts.search-form')
	</div>
    <ul class="nav nav-justified bottom-nav navbar-collapse collapse">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">nữ
			</a>
			@include('front.category.female-cate-menu', ['female_cate' => $female_cate])
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">nam
			</a>
			@include('front.category.male-cate-menu', ['male_cate' => $male_cate])
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">trang phục
			</a>
			<ul class="dropdown-menu">
            	<li><a href="" title=""></a></li>
           	</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">màu sắc
			</a>
			@include('front.feature-menu.color-default-value-menu', ['color_default_values' => $color_default_values])
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">chất liệu
			</a>
			@include('front.feature-menu.feature-default-value-menu', ['feature_default_values' => $material_default_values])
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">họa tiết
			</a>
			@include('front.feature-menu.feature-default-value-menu', ['feature_default_values' => $pattern_default_values])
		</li>
    </ul>
    </div>
</header><!-- /header -->
