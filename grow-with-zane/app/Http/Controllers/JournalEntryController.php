<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalEntryController extends Controller
{
    public function index($id)
    {
        // Display a list of journal entries for a specific grow journal
    }

    public function create($id)
    {
        // Show the form to create a new journal entry for a specific grow journal
    }

    public function store(Request $request, $id)
    {
        // Store a new journal entry for a specific grow journal
    }

    public function show($id, $entry_id)
    {
        // Display a specific journal entry
    }

    public function edit($id, $entry_id)
    {
        // Show the form to edit a specific journal entry
    }

    public function update(Request $request, $id, $entry_id)
    {
        // Update a specific journal entry
    }

    public function destroy($id, $entry_id)
    {
        // Delete a specific journal entry
    }
}
