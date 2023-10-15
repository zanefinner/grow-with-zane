@extends('layouts.app')

@section('content')
    <h1>Edit Journal Entry</h1>
    <form method="POST" action="{{ route('journal_entries.update', [$growJournal->id, $entry->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="entry_date">Entry Date</label>
            <input type="date" class="form-control" id="entry_date" name="entry_date" value="{{ $entry->entry_date }}" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes">{{ $entry->notes }}</textarea>
        </div>
        <div class="form-group">
            <label for="image_path">Image Path</label>
            <input type="text" class="form-control" id="image_path" name="image_path" value="{{ $entry->image_path }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Entry</button>
    </form>
    <a href="{{ route('journal_entries.show', [$growJournal->id, $entry->id]) }}" class="btn btn-secondary">Back</a>
@endsection
