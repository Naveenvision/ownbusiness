@extends('layouts.app')

@section('content')

<button onclick="history.back()">Go Back</button>

<button onclick="history.forward()"> Go Forward</button>

@if ($entrys->isNotEmpty())
<div class="table table-dark table-striped blockquote ">
    <table style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Rate</th>
                <th>Boal</th>
                <th>Coal</th>
                <th>amount</th>
                <th>status</th>
                <th>Received_amount</th>
                <th>Balance</th>
                <th>actions</th>
                {{-- <th></th> --}}
                {{-- Add other column headers as needed --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($entrys as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->rate }}</td>
                    <td>{{ $item->boal }}</td>
                    <td>{{ $item->coal }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->rec_amount }}</td>
                    <td>{{ $item->balance }}</td>
                    <td class="btn btn-primary" style="color:white;">
                    <a id="view_button" href="{{ route('entrys.show' , $item->id ) }}" name="view">view</a>
                    </td>
                    {{-- <td><a href="{{ url('/entrys/show' , $item->id ) }}" name="view">view</a></td> --}}
                    <td>
                    
                    <form action="{{ route('entrys.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete Entry</button>
                    </form>

                    </td>                    
                                    
                    <td><button name="print">print</button></td>                    

                    {{-- <td><a href="{{ url('/entrys/{'.'$item->id '.'}/edit') }}" name="edit" value="">edit</a></td>                     --}}
                    <td><button name="copy">copy</button></td> 
                                 
                    {{-- Display other columns --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>    
@else
    <p>No records found.</p>
@endif

@endsection