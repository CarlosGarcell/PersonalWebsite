@extends('master')

	@section('content')

	<div class="about-background background">
		<div class="container">
			<div class="row about fadeInDown animated">
				<div class="col-md-4">	
					<img src="https://s.gravatar.com/avatar/97175707ce2f7d148beb2ecce6dcaf35?s=300" class="img-circle">					
				</div>
				<div class="col-md-8 description">										
					<h1>A little about me...</h1>
					<p>Hello, I'm Carlos, a web developer and software engineer from Venezuela.</p>
					
					<p>From age 5 onwards, I became deeply interested in technology, and after watching my dad code for several years, it became clear what I wanted to 					become in life.</p>
					
					<p>That's why most of my time is spent on improving my programming skills, becoming acquainted with the newest technologies on web development, 					coding or just getting up-to-date on the latest developments of the tech world.</p>
				</div>
			</div>
			<div class="row technologies-header">
			</div>
			<div class="row technologies back-end fadeInLeft animated">
				<h1>Technologies</h1>
				<div class="col-md-3 col-xs-6">							
					<a href="http://www.laravel.com" target="_blank"><img src="images/LaravelLogo.png" class="img-responsive" id="laravel-logo"></a>
					<h3>Laravel</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<a href="http://www.mysql.com" target="_blank"><img src="images/mysql-logo.png" class="img-responsive" id="mysql-logo"><a/>
					<h3>MySQL</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<a href="http://www.php.net" target="_blank"><img src="images/php-rounded-logo.png" class="img-responsive" id="php-logo"></a>
					<h3>PHP</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<a href="http://www.apple.com/osx/" target="_blank"><img src="images/finder-icon.png" id="finder-icon"></a>
					<h3>Mac OS X</h3>
				</div>
			</div>
			<div class="row technologies front-end fadeInRight animated">
				<div class="col-md-3 col-xs-6">
					<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><img src="images/javascript-logo.png" id="javascript-logo"></a>
					<h3>Javascript</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<a href="http://www.jquery.com" target="_blank"><img src="images/jquery-logo.png" id="jquery-logo"></a>
					<h3>jQuery</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<img src="images/html5-logo.png" id="html5-logo">
					<h3>HTML5</h3>
				</div>
				<div class="col-md-3 col-xs-6">
					<img src="images/css3-logo.png" id="css3-logo">
					<h3>CSS3</h3>
				</div>
			</div>						
		</div>
	</div>
@stop