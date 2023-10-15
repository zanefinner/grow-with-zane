<?php

namespace App\Http\Controllers;
use App\Models\JournalEntry;
use App\Models\GrowJournals;
use Illuminate\Http\Request;

class JournalEntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $entries = $growJournal->entries;
        return view('journal_entries.index', compact('growJournal', 'entries'));
    }

    public function create($id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        return view('journal_entries.create', compact('growJournal'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->validate([
            'entry_date' => 'required|date',
            'summary' => 'required|string',
            'notes' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $growJournal = GrowJournals::findOrFail($id);
        $entry = $growJournal->entries()->create($data);

        return redirect()->route('journal_entries.show', [$growJournal->id, $entry->id])
            ->with('success', 'Journal Entry created successfully');
    }

    public function show($id, $entry_id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $entry = $growJournal->entries()->findOrFail($entry_id);
        return view('journal_entries.show', compact('growJournal', 'entry'));
    }

    public function edit($id, $entry_id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $entry = $growJournal->entries()->findOrFail($entry_id);
        return view('journal_entries.edit', compact('growJournal', 'entry'));
    }

    public function update(Request $request, $id, $entry_id)
    {
        $data = $request->validate([
            'entry_date' => 'required|date',
            'summary' => 'required|string',
            'notes' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $growJournal = GrowJournals::findOrFail($id);
        $entry = $growJournal->entries()->findOrFail($entry_id);
        $entry->update($data);

        return redirect()->route('journal_entries.show', [$growJournal->id, $entry->id])
            ->with('success', 'Journal Entry updated successfully');
    }

    public function destroy($id, $entry_id)
    {
        $growJournal = GrowJournals::findOrFail($id);
        $entry = $growJournal->entries()->findOrFail($entry_id);
        $entry->delete();

        return redirect()->route('journal_entries.index', $growJournal->id)
            ->with('success', 'Journal Entry deleted successfully');
    }
}
