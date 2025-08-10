@extends('layouts.app')

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
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Entry  form</button>
            </div>

            <a class="navbar-brand" href="{{ url('/entry/create') }}">a button
                {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>
        </div>
    </div>
</div>
@endsection
