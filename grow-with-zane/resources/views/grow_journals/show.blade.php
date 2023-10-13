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

            <a href="{{ route('grow_journals.edit', $growJournal->id) }}" class="btn btn-warning">Edit</a>
            
            <form action="{{ route('grow_journals.destroy', $growJournal->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this journal?')">Delete</button>
            </form>

            <a href="{{ route('grow_journals.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection