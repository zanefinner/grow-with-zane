<?php

namespace App\Http\Controllers;

use App\Models\GrowJournals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrowJournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $growJournals = GrowJournals::all();
        return view('grow_journals.index', compact('growJournals'));
    }

    public function create()
    {
        return view('grow_journals.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Create a new Grow Journal associated with the authenticated user
        $growJournal = $user->growJournals()->create($data);

        return redirect()->route('grow_journals.show', $growJournal->id)
            ->with('success', 'Grow Journal created successfully');
    }

    public function show($id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        return view('grow_journals.show', compact('growJournal'));
    }

    public function edit($id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $this->authorize('delete', $growJournal); // Pass $growJournal, not $id

        return view('grow_journals.edit', compact('growJournal'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        
        
        $growJournal = GrowJournals::findOrFail($id);
        $this->authorize('delete', $growJournal); // Pass $growJournal, not $id
        $growJournal->update($data);

        return redirect()->route('grow_journals.show', $growJournal->id)
            ->with('success', 'Grow Journal updated successfully');
    }

    public function destroy($id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $this->authorize('delete', $growJournal); // Pass $growJournal, not $id

        // Delete associated entries
        $growJournal->entries()->delete();

        // Delete the Grow Journal
        $growJournal->delete();

        return redirect()->route('grow_journals.index')
            ->with('success', 'Grow Journal and associated entries deleted successfully');
    }
}
