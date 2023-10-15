@extends('layouts.app')

@section('content')
    <h1>Journal Entry Details</h1>
    <h2>Entry Date: {{ $entry->entry_date }}</h2>
    <p>Notes: {{ $entry->notes }}</p>
    @if ($entry->image_path)
        <p>Image Path: {{ $entry->image_path }}</p>
    @endif
    <a href="{{ route('journal_entries.edit', [$growJournal->id, $entry->id]) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('journal_entries.index', $growJournal->id) }}" class="btn btn-secondary">Back</a>
@endsection
