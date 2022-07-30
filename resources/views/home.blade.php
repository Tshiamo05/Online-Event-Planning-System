@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <br><br>
                            <a href="/" class="btn btn-primary">Go somewhere</a>
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <a href="/" class="btn btn-primary">Go back</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
