@extends('layouts.app')

@section('content')

<button onclick="history.back()">Go Back</button>
<button onclick="history.forward()"> Go Forward</button>
<br>
<hr>

<div class="bg-success">
  <form class="container bg-info" method="POST" action="{{ route('entrys.store') }}" style="width: 400px;">
    @csrf
    
    <div class="form-group">
      <label for="exampleInputName">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter Name.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter current date.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Rate</label>
      <input type="number" name="rate" oninput="calculate()" class="form-control" id="customIdRate" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted"> Enter rate of </small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">BOAL</label>  
      <input type="number" name="boal" onkeyup="calculate()" class="form-control" id="customIdBoal" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted"> Enter boal </small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">COAL</label>
      <input type="number" name="coal" class="form-control" id="customIdCoal" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted"> Enter coal</small>
    </div>

    <label for="exampleInputEmail1">Status</label>
    <div class="form-check">
      <input class="form-check-input" name="status" type="checkbox" value="entry" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Entry
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="status" type="checkbox" value="received" id="defaultCheck2" disabled>
      <label class="form-check-label" for="defaultCheck2">
        Received
      </label>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Amount</label>
      <input type="number" name="amount" class="form-control" id="CustomIdAmount" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Showing here the cost of meterial </small>
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <div>
      <!-- Button trigger modal -->
      <button type="button submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Submit modal 
      </button>
    </div>

    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

@endsection
