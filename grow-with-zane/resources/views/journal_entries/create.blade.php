@extends('layouts.app')

@section('content')
    <h1>Create Journal Entry for {{ $growJournal->name }}</h1>
    <form method="POST" action="{{ route('journal_entries.store', $growJournal->id) }}">
        @csrf
        <div class="form-group">
            <label for="entry_date">Entry Date</label>
            <input type="date" class="form-control" id="entry_date" name="entry_date" required>
        </div>
        <div class="form-group">
            <label for="entry_date">Summary</label>
            <input type="text" class="form-control" id="summary" name="summary" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <div class="form-group">
            <label for="image_path">Image Path</label>
            <input type="text" class="form-control" id="image_path" name="image_path">
        </div>
        <button type="submit" class="btn btn-primary">Create Entry</button>
    </form>
    <a href="{{ route('journal_entries.index', $growJournal->id) }}" class="btn btn-secondary">Back</a>
@endsection
