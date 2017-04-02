@extends('layouts.master')

@section('title', 'Welcome')

@section('stylesheet')
	@parent
@endsection

@section('content')

<!--main content -->
<div class="pusher">
	<div id="home" class="ui vertical aligned center segment inverted header_bannar">
		<div class="ui container">
			<div class="ui secondary inverted top large pointing menu">
				<div class="left item">
					<a href="#">
						{{-- <i class="sidebar icon tablet"></i> --}}
					</a>
					<a href="#" class="logo">
						<img src="/images/logo.png" alt="">
						<span>BookShelf</span>
					</a>
				</div>

				<div class="right item">
					<a href="/" class="active item">Home</a>
					<a href="#process" class="item">Process</a>
					<a href="#login" class="item">Login</a>
					<a href="#signup" class="item">Registration</a>
				</div>
			</div>
		</div>

		<div class="bannar_info wow fadeIn">
			<div class="ui grid">
				<div class="five wide right floated column">
					<h1 class="ui header inverted">Store your BOOK!</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco,
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>

	</div> <!--header_bannar end -->

	<section id="process" class="process">
		<h1 class="ui header centered horizontal divider">PROCESS</h1>
		<div class="ui equal width column center aligned grid very relaxed container wow fadeInUp">
			<div class="column">
				<i class="sign in icon"></i>
				<span>Registration</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
			<div class="column">
				<i class="book icon"></i>
				<span>Add Book</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
			<div class="column">
				<i class="add user icon"></i>
				<span>Add Borrower</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
		</div>
	</section>

	<section id="login" class="login">
		<h1 class="ui header inverted centered horizontal divider">Sign In</h1>
		<div class="ui grid basic segment">
			<div class="eight wide centered column">
				<div class="ui form">
					<div class="field wow slideInLeft">
						<div class="ui left icon input">
							<input type="text" placeholder="Username">
							<i class="user icon"></i>
						</div>
					</div>
					<div class="field wow slideInRight">
						<div class="ui left icon input">
						<input type="password" placeholder="Password">
						<i class="lock icon"></i>
						</div>
					</div>
					<div class="inline field  wow fadeIn">
						<div class="ui checkbox">
							<input id="remember" type="checkbox">
							<label for="remember"> Remember me </label>
						</div>
					</div>
					<div class="ui teal submit button wow fadeIn"> Sign In </div>
				</div>
			</div>
		</div>
	</section>

	<section id="signup" class="signup">
		<h1 class="ui header centered horizontal divider">Registration</h1>
		<div class="ui grid basic segment">
			<div class="eight wide centered column">
				<div class="ui form">
					<div class="field wow slideInLeft">
						<label> Name </label>
						<div class="ui left icon input">
							<input placeholder="Bruce Wayne" type="text">
							<i class="user icon"></i>
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
					<div class="two fields wow slideInRight">
						<div class="field">
							<label> Username </label>
							<div class="ui left icon input">
								<input id="username" placeholder="Batman" type="text">
								<i class="user icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
						<div class="field">
							<label> Email </label>
							<div class="ui left icon input">
								<input id="email" placeholder="batman@batcave.com" type="text">
								<i class="mail icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="two fields  wow slideInLeft">
						<div class="field">
							<label> Password </label>
							<div class="ui left icon input">
								<input id="password" placeholder="e.g., !@#$%^&amp;*()_+:)" type="password">
								<i class="lock icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
						<div class="field">
							<label> Confirm Password </label>
							<div class="ui left icon input">
								<input id="confirm-password" placeholder="e.g., !@#$%^&amp;*()_+:)" type="password">
								<i class="lock icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="ui teal submit button wow fadeIn"> Sign Up </div>
					<div class="ui error message"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer">

		<div class="ui centered grid wow slideInUp">
			<div class="row">
				<div class="five wide column">
					<div class="ui form">
						<div class="field">
							<div class="ui action input">
								<input type="email" placeholder="batman@batcave.com">
								<button class="ui teal right labeled icon button">
									<i class="announcement icon"></i>
									Tell Your Friends
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright">
				<a href="#">&copy; Maruf, Mohib, Momit</a>
			</div>

		</div>

		<a class="up-arrow" href="#home"><i class="arrow circle up icon"></i></a>

	</section>
</div>

@endsection

@section('javascript')
	@parent
@endsection
