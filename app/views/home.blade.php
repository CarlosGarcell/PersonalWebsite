@extends('master')

	@section('content')

		<div class="alert alert-success" role="alert">
			{{ Session::get('message') }}
		</div>

		<div class="home-header header">
			<header class="page-header page-header-local fadeInLeft animated">
				<h1>CarlosGarcell.<small> Web Developer, Software Engineer.</small></h1>
			</header>
		</div>

		<script type="text/javascript">

			$(document).ready(function() {
				$('.alert').delay(4000).slideUp(300);
			});

			$(function() {
				$(".home-header").backstretch("images/homeimg.jpg");
			});

		</script>

	@stop