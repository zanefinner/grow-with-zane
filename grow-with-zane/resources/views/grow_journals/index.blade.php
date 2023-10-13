@extends('layouts.app')

@section('content')
    <h1>Grow Journals</h1>

    <a href="{{ route('grow_journals.create') }}" class="btn btn-success">Create New Journal</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($growJournals as $journal)
                <tr>
                    <td>{{ $journal->title }}</td>
                    <td>{{ $journal->description }}</td>
                    <td>
                        <a href="{{ route('grow_journals.show', $journal->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('grow_journals.edit', $journal->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('grow_journals.destroy', $journal->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this journal?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection