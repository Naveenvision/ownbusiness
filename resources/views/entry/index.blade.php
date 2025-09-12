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
                <div class="card-header">
                  <h1> Index Blade File Specific Record</h1>
                </div>
                <div class="card-body">
                    <div class="list-group">
                      <a  class="list-group-item list-group-item-action">ID: {{ $entry->id}} </a>
                      <a  class="list-group-item list-group-item-action">DATE: {{ $entry->date}} </a>
                      <a  class="list-group-item list-group-item-action">NAME: {{ $entry->name}} </a>
                      <a  class="list-group-item list-group-item-action">RATE: {{ $entry->rate}} </a>
                      <a  class="list-group-item list-group-item-action">BOAL: {{ $entry->boal}} </a>
                      <a  class="list-group-item list-group-item-action">COAL: {{ $entry->coal}} </a>
                      <a  class="list-group-item list-group-item-action">AMOUNT: {{ $entry->amount}} </a>
                      <a  class="list-group-item list-group-item-action">STATUS: {{ $entry->status}} </a>
                      <a  class="list-group-item list-group-item-action">RECEIVED AMOUNT: {{ $entry->rec_amount}} </a>
                      <a  class="list-group-item list-group-item-action">BALANCE: {{ $entry->balance}} </a>
                      <a href="#" class="list-group-item list-group-item-action bg-dark btn btn-primary" style="color: white;">  PRINT  </a>          

                      {{-- <a  class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection