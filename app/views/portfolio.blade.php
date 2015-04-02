@extends('master')

	@section('content')
	
	<script type="text/javascript">

		$(function() {
			$(".portfolio").backstretch("images/macbook-notes.jpg");
		});

	</script>

	<div class="portfolio header">
		<div class="container">
			<div clas="row fadeInDown animated">
				<div class="col-lg-12">
					<header class="page-header">
						<h1>Projects</h1>
					</header>
				</div>
			</div>
			<div class="row fadeInRight animated">
				<div class="col-md-7">
					<img src="images/AG1.png" class="img-responsive">
				</div>
				<div class="col-md-5">
					<h3>America Gourmet</h3>
					<p>Panamanian magazine that revolves around the gastronomies of Panama, Venezuela and the United States.</p>
					<a href="http://www.sudotechtest.com/AG" target="_blank">View AG</a>
				</div>
			</div>
			<hr>
			<div class="row fadeInLeft animated">
				<div class="col-md-7">
					<img src="images/acplus.png" class="img-responsive">
				</div>
				<div class="col-md-5">
					<h3>ACPLUS, C.A.</h3>
					<p>Air conditioner retailer located in Maracaibo, Zulia, Venezuela.</p>
					<a href="http://www.sudotechtest.com/acplusca" target="_blank">View ACPLUS</a>
				</div>
			</div>
		</div>
	</div>
@stop