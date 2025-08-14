@extends('layouts.app')

<div>
  <h1>entry form file</h1>

  <form class="container" method="POST" action="{{ route('entrys.store') }}"> {{--  "{{ route('/entry') }}" "{{ url('/entry/create') }}"  --}}
    @csrf 
    <label>date</label>
    <input type="date" name="date">
    <label>name</label>
    <input type="text" name="name">
    <label>rate</label>
    <input type="number" name="rate">
    <label>BOAL</label>
    <input type="number" name="boal">
    <label>COAL</label>
    <input type="number" name="coal">
    <label>amount</label>
    <input type="number" name="amount">
    <label>status</label>
    <input type="radio" value="entry" name="status">entry
    <input type="radio" value="received" name="receivedlbl" disabled>received
    {{-- <a href="" name="">entry</a> --}}
    <button type="submit">Submit</button>

  </form>
</div>

