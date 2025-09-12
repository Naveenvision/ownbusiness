@extends('layouts.app')

@section('content')

<button onclick="history.back()">Go Back</button>

<button onclick="history.forward()"> Go Forward</button>


<br>
<br>
<hr>
<div class="bg-success">
  <form class="container bg-info" style="width: 300px;">
    <div class="form-group">
      <label for="exampleInputName">Name</label>
      <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone</small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter current date.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Received Amount</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone</small>
    </div>

    <label for="exampleInputEmail1">Status</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"disabled>
      <label class="form-check-label" for="defaultCheck1">
        Entry
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Received
      </label>
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection