@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					{{--<div id="demo">
						<p>{{message}}</p>
						<input v-model="message">
					</div>--}}
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/main.js') }}"></script>
@endsection
