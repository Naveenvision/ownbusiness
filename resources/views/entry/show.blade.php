@if ($entrys->isNotEmpty())
    <table>
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
                    {{-- Display other columns --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No records found.</p>
@endif