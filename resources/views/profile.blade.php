@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
                <form>
                    <div class="form-group">
                        <label for="User">User Name</label>
                        <input type="text" class="form-control" placeholder={{ Auth::user()->name}}>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" placeholder={{ Auth::user()->email}}>
                    </div>
                    <div class="form-group">
                        <label for="api_key">API key</label>
                        <input type="text" class="form-control"  placeholder="{{ Auth::user()->apiKey->key }}">
                    </div>
                </form>
@endsection

