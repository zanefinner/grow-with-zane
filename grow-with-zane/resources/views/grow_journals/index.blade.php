@extends('layouts.app')

@section('content')
    <h1>Grow Journals</h1>

    <a href="{{ route('grow_journals.create') }}" class="btn btn-success mb-3">Create New Journal</a>

    <div class="row">
        @foreach($growJournals as $journal)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <div class="card-body" style="max-height: 200px; overflow: auto;">
                        <h5 class="card-title">{{ $journal->title }}</h5>
                        <p class="card-text">{{ $journal->description }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ route('grow_journals.show', $journal->id) }}" class="btn btn-primary">View</a>

                        @if (auth()->check() && $journal->user_id === auth()->user()->id)
                        <a href="{{ route('grow_journals.edit', $journal->id) }}" class="btn btn-warning">Edit</a>
                        @endif
                        @if (auth()->check() && $journal->user_id === auth()->user()->id)
                        <form action="{{ route('grow_journals.destroy', $journal->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this journal?')">Delete</button>
                        @endif






                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
