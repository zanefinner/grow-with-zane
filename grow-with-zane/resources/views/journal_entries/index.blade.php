@extends('layouts.app')

@section('content')
    <h1>Journal Entries for {{ $growJournal->name }}</h1>
    <a href="{{ route('journal_entries.create', $growJournal->id) }}" class="btn btn-primary">Create New Entry</a>

    @if (count($entries) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Entry Date</th>
                    <th>Actions</th>
                    <th>Summary</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{ $entry->entry_date }}</td>
                        <td>{{ $entry->summary }}</td>
                        <td>{{ $entry->notes }}</td>
                        <td>
                            <a href="{{ route('journal_entries.show', [$growJournal->id, $entry->id]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('journal_entries.edit', [$growJournal->id, $entry->id]) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No journal entries found.</p>
    @endif
@endsection
