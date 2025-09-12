@extends('layouts.app')

@section('content')

<button onclick="history.back()">Go Back</button>
<button onclick="history.forward()"> Go Forward</button>
<br>
<hr>

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

            <a class="navbar-brand btn btn-primary" class="button" href="{{ route('entrys.create') }}">Entry Form 
            </a>
            
            <a class="navbar-brand btn btn-success" class="button" href="{{ route('entrys.index') }}">Show Entrys
                {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>

                <a class="navbar-brand btn btn-info" class="button" href="{{ url('/received') }}">Received Form 
            </a>

  {{--  "{{ route('/entry') }}" "{{ url('/entry/create') }}"  --}}
        </div>
    </div>
</div>
@endsection
