@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('alert::alert')
                @include('layouts.partials.calculator_form')
            </div>
        </div>
    </div>
@endsection