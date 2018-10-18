<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="css/css-bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/loginCss.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<section class="container-fluid">
		<header class="container-fluid head">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">BandMix</a>
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">TRANG CHỦ<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="band.html">BAN NHẠC</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link disabled" href="event.html">SỰ KIỆN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="aboutus.html">GIỚI THIỆU</a>
						</li>
						<li class="nav-item">
							
							<!-- <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search"> -->
						</li>
						
					</ul>
					<div class="search-container">
						<form action="">
							<input type="text" placeholder="Tìm kiếm..." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
        @if(Auth::guest())
					<form class="form-inline my-2 my-lg-0 main-nav">
						
						<a class="signin" href="#0">Đăng nhập</a>
						<a class="signup" href="#0">Đăng Ký</a>
					</form>
        @else
            <div class="dropdown">
                <a href="" class="dropdown-toggle" id="dropdown-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-item" href="#">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        @endif
				</div>
			</nav>
		</header>
		<img src="images/slide.jpg" style="width: 100%">
        @if(Auth::guest())
            {{--Login pop-up--}}
            <div class="user-modal">
                <div class="user-modal-container">
                    <ul class="switcher">
                        <li><a href="#0">Sign in</a></li>
                        <li><a href="#0">New account</a></li>
                    </ul>

                    <div id="login">
                        <form class="form" action="{{route('login')}}" method="POST">
                            @csrf
                            <p class="fieldset">
                                <label class="image-replace email" for="signin-email">E-mail</label>
                                <input class="full-width has-padding has-border" name="email" id="signin-email" type="email" placeholder="E-mail">
                                <span class="error-message">An account with this email address does not exist!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace password" for="signin-password">Password</label>
                                <input class="full-width has-padding has-border" id="signin-password" type="password" name="password"  placeholder="Password">
                                <a href="#0" class="hide-password">Show</a>
                                <span class="error-message">Wrong password! Try again.</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="remember">
                                <label for="remember-me">Remember me</label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width" type="submit" value="Login">
                            </p>
                        </form>

                        <p class="form-bottom-message"><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                        <!-- <a href="#0" class="close-form">Close</a> -->
                    </div>

                    <div id="signup">
                        <form class="form" method="POST" action="{{ route('register')}}>
                            <p class="fieldset">
                                <label class="image-replace username" for="signup-username">Username</label>
                                <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                                <span class="error-message">Your username can only contain numeric and alphabetic symbols!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace email" for="signup-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                                <span class="error-message">Enter a valid email address!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace password" for="signup-password">Password</label>
                                <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
                                <a href="#0" class="hide-password">Show</a>
                                <span class="error-message">Your password has to be at least 6 characters long!</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="accept-terms">
                                <label for="accept-terms">I agree to the <a class="accept-terms" href="#0">Terms</a></label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Create account">
                            </p>
                        </form>

                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div>

                    <a href="#0" class="close-form">Close</a>
                </div>
            </div>
        @endif

	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	{{--<script src="{{asset('js/jquery.js')}}"></script>--}}
	<script src="{{asset('js/login.js')}}"></script>

</body>
</html>