@extends('layouts.app')

@section('content')
    <h1>Edit Grow Journal</h1>

    <form method="post" action="{{ route('grow_journals.update', $growJournal->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $growJournal->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $growJournal->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('grow_journals.show', $growJournal->id) }}" class="btn btn-secondary">Cancel</a>
</div>