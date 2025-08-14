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

            <a class="navbar-brand" href="{{ route('entrys.create') }}">Entry Form 
            </a>
            
            <a class="navbar-brand" href="{{ route('entrys.index') }}">Show Entrys
                {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>
        </div>
    </div>
</div>
@endsection
