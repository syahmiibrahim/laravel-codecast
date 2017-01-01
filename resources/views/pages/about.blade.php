@extends('layouts.app')
@section('content')
<h3>About Me</h3>

<div class="card z-depth-3">
	<div class="card-content white-text">
		<div class="col m6">
			<a class="twitter-timeline" data-height="500" href="https://twitter.com/syahmiibrahim">Tweets by syahmiibrahim</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="col m6">
			<div class="card-panel gre lighten-5 z-depth-1">
				<div class="row valign-wrapper">
					<div class="col m3">
					<img src="{{ asset('images/najib.jpg')}}" alt="" class="circle responsive-img">
					</div>
					<div class="col-m9">
						<div class="black-text">
							Let the chirp tell you more =)
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection