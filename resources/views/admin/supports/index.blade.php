<h1>Support list</h1>

<a href="{{ route('supports.create') }}">add new support</a>

<table>
    <thead>
        <th>Subject</th>
        <th>Status</th>
        <th>Description</th>
    </thead>

    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td><a href="{{ route('supports.show', $support->id) }}">></a></td>
                <td><a href="{{ route('supports.edit', $support->id) }}">edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination-simple-tailwind :paginator="$supports" :appends="$filters" />
