@extends('master')

	@section('content')
	
	<script type="text/javascript">
	
		$(function() {		
			$(".contact").backstretch("images/my-keyboard.jpg");	
		});

	</script>
	
	<div class="contact header">
		<div class="container">
			<div class="alert alert-success" role="alert" id="error-alert">{{ $errors->first('inputName', ':message</br>') }}{{ $errors->first('inputEmail', ':message</br>') }}{{ $errors->first('inputSubject', ':message</br>') }}{{ $errors->first('inputDescription', ':message') }}</div>
			<div class="contact-form">
				<div class="contact-headers">
					<h1>Let's work together</h1>
					<h3>Tell me about your project...</h3>
				</div>
				<div class="form-horizontal" role="form">					
					{{ Form::open(['url' => 'mail']) }}
						<div class="form-group">
							<div class="col-xs-12">
								{{ Form::input('text', 'inputName', null, array('class'=>'form-control', 'placeholder'=>'Name', 
								'autofocus'=>'autofocus')) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								{{ Form::input('email', 'inputEmail', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								{{ Form::input('text', 'inputSubject', null, array('class'=>'form-control', 'placeholder'=>'Subject')) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
							{{ Form::textarea('inputDescription', null, 
								array('class'=>'form-control', 'placeholder'=>'What are you looking for?', 'rows'=>'4')) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12" id="copyEmail">
								Check here if you would like to receive a copy
								{{ Form::checkbox('copyEmail', 'checked') }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								{{ Form::submit('Send Request', array('class'=>'btn btn-primary btn-lg btn-block form-control', 'id'=>'send-btn')) }}
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
			<hr>
			<div class="col-md-12 row">
				<ul>
					<li class="col-xs-3">
						<a href="https://twitter.com/Carlos_Garcell" target="_blank"><img src="images/twitter.png"></a>
					</li>
					<li class="col-xs-3">
						<a href="https://plus.google.com/+CarlosAlfredoGarcellMelero/posts" target="_blank"><img src="images/google+.png"></a>
					</li>
					<li class="col-xs-3">
						<a href="https://www.linkedin.com/pub/carlos-garcell/49/583/aa9" target="_blank"><img src="images/linkedin.png"></a>
					</li>
					<li class="col-xs-3">
						<a href="https://github.com/CarlosGarcell" target="_b"><img src="images/github.png"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<script type="text/javascript">

		if($('.alert').text() === "") {
			$('.alert').hide();
		} else {
			$('.alert').delay(5000).slideUp(300);
		}

	</script>
@stop