@extends('layouts.home')
@section('content')
	<div class="container">
		<div class="row">
			
		</div>
		<div class="row">
			@foreach($about as $a)
			<div class="container">
				<div class="row">
					<h1>About Us</h1>
					<div class="text-left">
			
							{!!$a->about_us_content!!}
			
					</div>	
				</div>
			</div>
				
			<br>
			<div class="container">
				<div class="row">
					<h2>Our Mission</h2>
						<div class="text-left">
						
							{!!$a->mission_content!!}
						
						</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="row">
					<h2>Our Vision</h2>
						<div class="text-left">
						
							{!!$a->vision_content!!}
						
						</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="row">
					<h2>Our Core Values</h2>
						<div class="text-left">
							
							{!!$a->core_values_content!!}
						
						</div>	
				</div>
			</div>	
			@endforeach
		</div>
	</div>
@endsection