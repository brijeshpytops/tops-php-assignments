@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <p>{{ __('Welcome to your dashboard!') }}</p>
                        <p>{{ __('You are logged in!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
