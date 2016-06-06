@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	@cache('companies')
	@include('layouts.partials.grid')
	@endcache
@endsection
