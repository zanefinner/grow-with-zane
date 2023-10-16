@extends('layouts.app')

@section('content')
    <h1>Grow Journal Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $growJournal->title }}</h5>
            <p class="card-text">Description: {{ $growJournal->description }}</p>
            <p class="card-text">Created By: {{ $growJournal->user->name }}</p> {{-- Assuming you have a 'name' field in your User model --}}
            <p class="card-text">Created At: {{ $growJournal->created_at }}</p>
            <p class="card-text">Updated At: {{ $growJournal->updated_at }}</p>

            <a href="{{ route('journal_entries.index', $growJournal->id) }}" class="btn btn-warning">Entries</a>
            @if (auth()->check() && $growJournal->user_id === auth()->user()->id)
                        <a href="{{ route('grow_journals.edit', $growJournal->id) }}" class="btn btn-warning">Edit</a>
                        @endif
                        @if (auth()->check() && $growJournal->user_id === auth()->user()->id)
                        <form action="{{ route('grow_journals.destroy', $growJournal->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this journal?')">Delete</button>
                        @endif

        </div>
    </div>
@endsection
